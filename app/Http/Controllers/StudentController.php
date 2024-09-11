<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Mengambil hanya kolom yang diperlukan
        $students = Student::select('first_name', 'major')->get();

        return view('student.index', compact('students'));
    }
}