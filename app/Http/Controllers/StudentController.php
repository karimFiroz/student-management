<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::orderBy('reg_id','desc')->get();
        return view('pages.student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function student_create()
    {
        return view('pages.student.student_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function student_store(Request $request)
    {//insery data into students table
         $this->validate($request,[
            'reg_id'=>'required',
'name'=>'required|string|max:15',
'password'=>'required|min:6'

        ]);

        $student=new Student();
        
        $student->reg_id=$request->reg_id;
        $student->roll=$request->roll;
        $student->name=$request->name;
        $student->fname=$request->fname;
        $student->mname=$request->mname;
        $student->department=$request->department;
        $student->info=$request->info;
        $student->academy=$request->academy;
        $student->name=$request->name;
        $student->password=$request->password;
        $student->mobile=$request->mobile;
        $student->save();
        return redirect()->route('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function student_edit($id)
    {
        $student=Student::find($id);
        return view('pages.student.student_edit')->with('student',$student);
    }

    
    public function student_update(Request $request,$id)
    
    {//insery data into students table
        $student=Student::find($id);

        $student->reg_id=$request->reg_id;
        $student->roll=$request->roll;
        $student->name=$request->name;
        $student->fname=$request->fname;
        $student->mname=$request->mname;
        $student->department=$request->department;
        $student->info=$request->info;
        $student->academy=$request->academy;
        $student->name=$request->name;
        $student->password=$request->password;
        $student->mobile=$request->mobile;
        $student->save();
        return redirect()->route('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function student_delete($id)
    {
       $student=Student::find($id);
       $student->delete();
       return redirect()->route('students');
    }
}
