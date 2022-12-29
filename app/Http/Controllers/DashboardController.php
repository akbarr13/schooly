<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', ['title' => 'Dashboard']);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'major' => 'required|min:3',
            'gender' => 'required|string'
        ]);

        $credentials = [
            'name' => $request->name,
            'major' => $request->major,
            'gender' => $request->gender
        ];

        Student::create($credentials);

        return redirect('/students');
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->name = $request->input('name');
        $student->major = $request->input('major');
        $student->gender = $request->input('gender');

        $student->save();

        return redirect('/students');
    }

    public function show($id)
    {
        $student = Student::find($id);
        $title = 'Modify student';

        return view('update', ['student' => $student, 'id' => $id, 'title' => $title]);
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students');
    }
}
