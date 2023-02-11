<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
   
    public function index()
    {
      $students = DB::table('students')->orderBy('roll', 'asc')->get();
      return view('admin.students.index',compact('students'));
    }

    public function create()
    {
        $classes=DB::table('classes')->get();
       return view('admin.students.create',compact('classes'));
    }

    public function store(Request $request)
    {
       
     $request->validate([
        'class_id' => 'required',
        'name' => 'required',
        'roll' => 'required',
        'phone' => 'required',
    ]);
    $student=array(
        'class_id' => $request->class_id,
         'name' => $request->name,
        'roll' => $request->roll,
        'phone' => $request->phone,
    );

    DB::table('students')->insert($student);
    return redirect()->back()->with('success','Added successfully');
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
          $classes=DB::table('classes')->get();
          $student = DB::table('students')->where('id', $id)->first();
      return view('admin.students.edit',compact('student','classes'));
    }

    public function update(Request $request, $id)
    {
      $request->validate([
        'class_id' => 'required',
        'name' => 'required',
        'roll' => 'required',
        'phone' => 'required',
    ]);
      $student=[
     'class_id' => $request->class_id,
         'name' => $request->name,
        'roll' => $request->roll,
        'phone' => $request->phone,
    ];
         DB::table('students')
            ->where('id', $id)
            ->update($student);
         return redirect()->route('students.index')->with('success','update successfully');

    }

    public function destroy($id)
    {
      DB::table('students')->where('id',$id)->delete();
      return redirect()->back()->with('success','deleted successfully');
    }
}
