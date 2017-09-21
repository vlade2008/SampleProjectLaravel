<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    //

    public function getStudents()
    {
      $studentList = Student::all();
      return response()->json($studentList);
    }

    public function viewStudents(){
      $studentList = Student::all();

      return view('students', [
        'list_of_students' => $studentList
        ]);
    }

    public function viewDashboard()
    {
      return view('dashboard');
    } 

    public function viewLoginForm()
    {
      return view('loginform');
    }           
}
