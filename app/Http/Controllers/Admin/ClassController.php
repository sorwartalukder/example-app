<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ClassController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
       $classes=DB::table('classes')->get();
       return view('admin.class.index', ['classes' => $classes]);
    }
    public function create(){
       $classes=DB::table('classes')->get();
       return view('admin.class.create', ['classes' => $classes]);
    }
    
    public function store(Request $req){
        $req->validate([
            'class_name'=>'required|unique:classes',
        ]);
       $class=array(
        'class_name'=>$req->class_name,
       );
       DB::table('classes')->insert($class);
       return redirect()->back()->with('success','Added successfully');
    }
    public function delete($id){
     DB::table('classes')->where('id',$id)->delete();
     return redirect()->back()->with('success','Delete successfully');
    }
    function edit($id){
        $class = DB::table('classes')->where('id', $id)->first();
          return view('admin.class.edit', ['class' => $class]);
    }
    function update(Request $req, $id){
        $req->validate([
            'class_name'=>'required|unique:classes',
        ]);
         $class =array(
            'class_name'=>$req->class_name,
         );
         DB::table('classes')->where('id', $id)->update($class);
         return redirect()->back()->with('success','update successfully');
    }
    
}
