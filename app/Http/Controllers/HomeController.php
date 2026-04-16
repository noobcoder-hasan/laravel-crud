<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function upload(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;

        $image = $request->image;
        $imageName = time().'.'.$image->extension();
        $request->image->move('student_images', $imageName);

        $student->image = $imageName;
        $student->save();

        // Save the student data to the database
        // You can create a Student model and save the data accordingly

        return redirect()->back();
    }
    public function view(){
        return view('view');
    }
    }
