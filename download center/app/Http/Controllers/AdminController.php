<?php

namespace App\Http\Controllers;

use App\Models\studyField;
use App\Models\subject;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminProfile()
    {
        $studyField = studyField::all();
        $user = User::where('role','=','master')->get();
        return view('AdminProfile' , compact('user' , 'studyField'));
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

    public function AddSubject()
    {
        $studyField = studyField::all();
        $subject = subject::all();
        return view('AdminViews.AddSubject' , compact('subject' , 'studyField'));
    }

    public function insertSubject(Request $request)
    {
        $subject = subject::all();
        $studyField = studyField::all();
        $request->input('name');
        $request->input('StudyField_id');
  
        $subject =new subject();
        $subject->name = $request->name;
        $subject->StudyField_id = $request->StudyField_id;
        $subject->save();
            
        return redirect(route('AddSubject' , compact('studyField' , 'subject')));
    }
}
