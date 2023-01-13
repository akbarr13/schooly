<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $students = Student::paginate(20);

        $title = 'Student List';

        return view('students', ['students' => $students, 'title' => $title]);
    }

    public function showStudentApi($id)
    {
        $students = Student::where('id', $id)->get();
        return response()->json($students);
    }


    public function major($major)
    {
        $students = Student::where('major_id', $major)->get();
        $majors = Major::all();
        $title = 'Student List';

        return view('major_students', ['students' => $students, 'title' => $title, 'majors' => $majors]);
    }


}
