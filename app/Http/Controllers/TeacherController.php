<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        // Ambil input dari form pencarian
        $subject = $request->input('subject');

        // Jika ada input subject, filter berdasarkan subject
        if ($subject) {
            $teachers = Teacher::where('name', 'LIKE', '%' . $subject . '%')->get();
        } else {
            $teachers = Teacher::all();
        }

        // Tampilkan data ke view
        return view('teachers.index', compact('teachers'));
    }
}