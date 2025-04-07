<?php

namespace App\Http\Controllers;

use App\Models\studyField;
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
        $studyField = studyField::all();
        return view('AdminViews.AddStudyField' , compact('studyField'));
    }

    public function insertStudyField(Request $request)
    {
        $studyField = studyField::all();
        $request->input('name');
  
        $field =new studyField();
        $field->name = $request->name;
        $field->save();
            
        return redirect(route('AddStudyField' , compact('studyField')));
    }

    public function deleteStudyField($id)
    {
        $field = studyField::find($id);
        $field->delete();
         return redirect()->back()->with('success' , 'دسته بندی با موفقیت حذف شد');
    }
}
