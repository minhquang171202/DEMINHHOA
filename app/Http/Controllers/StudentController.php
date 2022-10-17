<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function get_all_student()
    {
        $products = Student::all(); //fetch all products from DB
        return view('student_manage', ['students' => $products]);
    }
    public function get_student_by_id($id)
    {
        $products = Student::find($id); //fetch all products from DB
        return view('student_edit', ['students' => $products]);
    }
    public function edit($id, Request $request)
    {
        
        $products = Student::find($id); //fetch all products from DB
        $products -> fullname = $request -> name;
        $products -> birthday = $request -> birthday;
        $products -> address = $request -> address;
        $products -> update();
        return redirect("/");

    }
}

