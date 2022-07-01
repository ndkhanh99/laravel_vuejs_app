<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\students;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;


class StudentController extends Controller
{

    public function show(){
        return view('auth.student');
    }
    public function store(Request $request){

        $student = new students();

        $user = auth()->user();

        $student->last_name = $request->last_name;
        $student->first_name = $request->first_name;
        $student->student_code = $request->student_code;
        $student->department = $request->department;
        $student->faculty = $request->faculty;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->note = $request->note;
        
        $student->save();
        $student->user()->save($user);

        return redirect()->route('home');
    }
    public function get_current_user(){

        $user = Auth::user();
        dd($user);

    }

}
