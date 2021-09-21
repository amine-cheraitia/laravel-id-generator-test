<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class StudentController2 extends Controller
{
    public function save(Request $request)
    {
        $id = IdGenerator::generate(['table' => 'students', 'field' => 'student_id', 'length' => 8, 'prefix' => 'FA' . date('y') . '-', 'reset_on_prefix_change' => true]);

        /*Student::create([
            "student_id" => $id,
            "type" => 'FV',

        ]);*/
        $q = new Student;
        $q->student_id = $id;
        $q->name = request()->name;

        $q->save();
    }
}