<?php

namespace App\Http\Controllers;

use App\Models\studyField;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function user()
    {
        $studyField = studyField::all();
        return view('index' , compact('studyField'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('user')); // بعد از خروج کاربر را به صفحه لاگین بفرست
    }

    public function StudentProfile()
    {
        return view('StudentProfile');
    }
}
