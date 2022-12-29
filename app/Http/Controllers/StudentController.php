<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $students = Student::all();
        $title = 'Student List';

        return view('students', ['students' => $students, 'title' => $title]);
    }


}
