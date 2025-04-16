<?php

namespace App\Http\Controllers;

use App\Models\notice;
use App\Models\studyField;
use App\Models\subject;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminProfile()
    {
        $notice = notice::all();
        $userStudent = User::where('role','=','student')->get();
        $studyField = studyField::all();
        $subject = subject::all();
        $user = User::where('role','=','master')->get();
        return view('AdminProfile' , compact('user' , 'studyField' , 'subject' , 'userStudent' , 'notice'));
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

    public function masterApprove(Request $request)
    {
        $master = User::findOrFail($request->id);
        
        $master ->approved = $request->approved;
        $master->update();
        return redirect(route('AdminProfile'));
    }

    public function AddNotice()
    {
        $notice = notice::all();
        $studyField = studyField::all();
        $subject = subject::all();
        $user = User::where('role','=','master')->get();
        return view('AdminViews.AddNotice' , compact('user' , 'studyField' , 'subject' , 'notice'));
    }











    /*--------------------------this is only for text editor-------------------*/
public function upload(Request $request)
{
    if ($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName . '_' . time() . '.' . $extension;

        $request->file('upload')->move(public_path('img'), $fileName);

        $url = asset('img/' . $fileName);
        return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
    }

    return response()->json(['uploaded' => 0, 'error' => ['message' => 'No file uploaded']]);
}
}
