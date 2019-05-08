<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student= \App\Student::orderBy('updated_at','desc')->get();
        
        return view('students.show')->with('student',$student);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = \App\Course::all();
        
        return view('students.create')->with('course',$course);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=\App\Student::create($request->all());
       
            $check=$request->check;
            foreach($check as $key => $item){
            $student->course->attach($item);
            
        }
        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $student =\App\Student::findOrFail($id);
        
        
        $courseall=\App\Course::all();
        $studentall =$student->course;
        $checkupdate= $courseall->diff($studentall);
        
        return view('students.edit',compact('student','studentall','checkupdate','courseall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'title'=>'required',
            'email'=>'required',
        ]);
        Student::findOrFail($id)->update($request->all());
        $student =Student::findOrFail($id);
        $student->course()->detach();
        $updateStudent= $request->check;
        $student->course()->attach($updateStudent);

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        \App\Student::findOrFail($id)->delete();
    
        return redirect()->route('student.index');
    }
}
