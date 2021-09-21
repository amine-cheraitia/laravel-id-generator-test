<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Helper;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {


        return view('home.index');
    }
    public function save(Request $request)
    {

        $student_name = $request->name;
        $student_id = Helper::IDGenerator(new Student, 'student_id', 5, $request->type . date('y'));
        //$student_id = Helper::IDGenerator(new Student, 'student_id', 5, 'STD');
        $q = new Student;
        $q->student_id = $student_id;
        $q->name = $student_name;

        $q->save();
    }
}