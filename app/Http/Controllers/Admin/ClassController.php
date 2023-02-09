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
    
}
