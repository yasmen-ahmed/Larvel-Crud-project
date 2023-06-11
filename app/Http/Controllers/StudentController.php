<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student=Student::all();
        // dd($student);
        return view('student.index',['students'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return  view('student.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(\Auth::user()); 
               // dd($request->all()['name']);
        // dd($request->get('name'));
        //authorization
        //validation

        //store
       $student =new Student();
       $student->id=$request->id;
       $student->track_id=$request->trackId;
    //    $student->track_id=2;
       $student->name=$request->name;
       $student->age=$request->age;
    //    $student->IDno=2018024;
       $student->IDno=$request->IDno;
      
       
      
    //    $student->track_id=$request->trackId;
//     $track = TrackController::find($request->trackId);

//        if (!$track) {
//     // handle invalid track ID error
//     return "Invalid track ID";
// }
// $student->track_id = $track->id;

// $student =new Student($request->all()); another way to assigan all variables in form
       if($student->save()){
        return redirect()->route('students.index');
       }
    //    $student->save();
       //dd($student);
       
       
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::find($id);
        // dd($student);
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student=Student::find($id);
       $student->name=$request->name;
       $student->age=$request->age;

       if($student->save()){
        return back();
       }
     
     
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Student::find($id)->delete();
       return back();

       //  Student::destory($id);
      
    }
}