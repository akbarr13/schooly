<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;


class DashboardController extends Controller
{
    public function index()
    {

        $majors = Major::all();
        return view('dashboard', ['title' => 'Dashboard', 'majors' => $majors]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'major' => 'required|min:3',
            'gender' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Retrieve the image from the request
        $image = $request->file('image');

        // Generate a unique file name
        $fileName = time() . '.' . $image->getClientOriginalExtension();

        // Save the image on the server
        $path = $image->move('student-images', $fileName);

        Student::create([
            'name' => $request->name,
            'major' => $request->major,
            'gender' => $request->gender,
            'image' => $path,
        ]);

        return redirect('/students');
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'major_id' => 'required|min:3',
            'gender' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $input['imagename'] = time() . '.' . $image->extension();

        $filePath = public_path('/student-images');
        $img = Image::make($image->path());
        $img->resize(110, 110, function ($const) {
            $const->aspectRatio();
        })->save($filePath . '/' . $input['imagename']);

        $filePath = '/student-images';
        $image->move($filePath, $input['imagename']);

        $student->name = $request->input('name');
        $student->major_id = $request->input('major_id');
        $student->gender = $request->input('gender');
        $student->image = $filePath.'/'.$input['imagename'];


        $student->save();

        

        return redirect('/students');
    }

    public function show($id)
    {
        $student = Student::find($id);
        $majors = Major::all();
        $title = 'Modify student';

        return view('update', ['title' => $title, 'student' => $student, 'majors' => $majors]);
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students');
    }
}
