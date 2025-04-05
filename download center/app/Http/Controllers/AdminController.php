<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminProfile()
    {
        $user = User::where('role','=','master')->get();
        return view('AdminProfile' , compact('user'));
    }

    public function AddStudyField()
    {
        return view('AdminViews.AddStudyField');
    }
}
