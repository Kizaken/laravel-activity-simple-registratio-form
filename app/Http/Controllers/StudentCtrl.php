<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentCtrl extends Controller
{
    public function index (Request $request){
        $addstudents = Student::all();
        return view('reg-form-completed',compact('addstudents'));
    }
    public function showRegistration(Request $request)
    {
        return view('reg-form');
    }
    public function processRegistration(Request $request)
    {
        $fname = $request->fname;
        $mname = $request->mname;
        $lname = $request->lname;
        $guardian =$request->guardian;
        $age = $request->age;
        $domicile = $request->domicile;
        $course = $request->course;
        $stud_no = $request->stud_no;
        $contact_no= $request->contact_no;

        $student = new Student;
       
        $student->fname  = $fname;
        $student->mname  = $mname;
        $student->lname  = $lname;
        $student->guardian = $guardian;
        $student->age = $age;
        $student->domicile  = $domicile;
        $student->course  = $course;
        $student->stud_no  = $stud_no;
        $student->contact_no = $contact_no;
        $student->save();

    
        return redirect('/home');
    }
    public function edit(Request $request, $id){
        $student = Student::find($id);
        return view ('edit-accounts', compact('student'));
    }
    public function save(Request $request){

        $id= $request->id;
        $fname = $request->fname;
        $mname = $request->mname;
        $lname = $request->lname;
        $guardian =$request->guardian;
        $age = $request->age;
        $domicile = $request->domicile;
        $course = $request->course;
        $stud_no = $request->stud_no;
        $contact_no= $request->contact_no;

        $student = Student::find($id);
       
        $student->id = $id;
        $student->fname  = $fname;
        $student->mname  = $mname;
        $student->lname  = $lname;
        $student->guardian = $guardian;
        $student->age = $age;
        $student->domicile  = $domicile;
        $student->course  = $course;
        $student->stud_no  = $stud_no;
        $student->contact_no = $contact_no;
        $student->save();

        return redirect('/home');
    }
    public function toDelete(Request $request, $id){
        $student = Student::find($id)->delete();
        return redirect('/home');
    }
}
