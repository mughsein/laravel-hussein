<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teachers::all();

        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'class_id'=>'required',
            'teacher_type'=>'required'
        ]);

        $teacher = new Teachers([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'class_id' => $request->get('class_id'),
            'teacher_type' => $request->get('teacher_type')
        ]);
        $teacher->save();
        return redirect('/teachers')->with('success', 'Teacher saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teachers = Teachers::find($id);
        return view('teachers.edit', compact('teachers'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'class_id'=>'required',
            'teacher_type'=>'required'
        ]);

        $teacher = Teachers::find($id);
        $teacher->first_name =  $request->get('first_name');
        $teacher->last_name = $request->get('last_name');
        $teacher->email = $request->get('email');
        $teacher->class_id = $request->get('class_id');
        $teacher->teacher_type = $request->get('teacher_type');
        $teacher->save();

        return redirect('/teachers')->with('success', 'Teacher updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teachers::find($id);
        $teacher->delete();

        return redirect('/teachers')->with('success', 'Teacher deleted!');
    }
}