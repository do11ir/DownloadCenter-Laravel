<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * نمایش صفحه ورود
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * بررسی ورود کاربر (با ایمیل یا کد دانشجویی)
     */
    public function store(Request $request): RedirectResponse
    {
        // اعتبارسنجی مقدار ورودی
        $request->validate([
            'login'    => 'required|string',
            'password' => 'required|string',
        ]);

        $loginInput = $request->input('login');

        // تشخیص خودکار: ایمیل است یا کد دانشجویی؟
        $fieldType = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'student_id';

        // تلاش برای ورود
        if (Auth::attempt([$fieldType => $loginInput, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended(route('user')); // هدایت به داشبورد
        }

        // ارور لاگین در صورت نامعتبر بودن اطلاعات
        throw ValidationException::withMessages([
            'login' => __('اطلاعات وارد شده صحیح نیست.'),
        ]);
    }

    /**
     * خروج از حساب کاربری
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
