<?php

namespace App\Http\Controllers;

use App\Models\notice;
use App\Models\studyField;
use App\Models\subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

   public function insertNotice(Request $request)
{
    // 1. Validation با نام فیلدهای فرم (حروف کوچک)
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
    ]);

    // 2. ذخیره تصویر اگر وجود داشته باشد
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = time() . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('img'), $imagePath);
    }

    // 3. ذخیره در پایگاه‌داده با رعایت حروف بزرگ مطابق ستون‌های جدول
    notice::create([
        'Title' => $request->title,
        'Content' => $request->content,
        'Author_Name' => Auth::user()->name,
        'Image' => $imagePath,
        'Field_Category' => $request->field_category
    ]);

    return redirect()->route('AdminProfile')->with('success', 'اطلاعیه جدید ایجاد شد.');
}

  public function AddNewFile()
  {
        $notice = notice::all();
        $studyField = studyField::all();
        $subject = subject::all();

    return view('AdminViews.AddNewFile' , compact('studyField' , 'subject' , 'notice'));
  }





}
