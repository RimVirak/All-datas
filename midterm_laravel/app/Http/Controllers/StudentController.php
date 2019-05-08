<?php

namespace App\Http\Controllers;

use App\Student;
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
        // $student= Student::all();
        $student = Student::orderBy('id','decs')->paginate();
        return view('student/index',['student'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $this->validate($request,[
        //      'name'=>'required:9',
        //      'email'=>'required|min:30',
        //  ]);
        //  return 'Required';
          Student::create([
             'name'=> $request->name,
             'email'=> $request->email,
             'gender'=> $request->gender,
             'age'=> $request->age
        ]);
        
        return redirect(route('student.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
     
        return view('student.show',['stu'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('stu'));
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
         $stu->name = $request->name;
         $stu->email = $request->email;
         $stu->gender = $request->gender;
         $stu->age = $request->age;
         $stu->save();
         return redirect(route('student.index'));
         session()->flash('Message','The student has been update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $stu->delete();
        return redirect(route('student.index'));
    }
}
