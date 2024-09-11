<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        // Mengambil semua tugas dengan due_date yang tidak NULL
        $assignments = Assignment::whereNotNull('due_date')->get();
        return view('assignments.index', compact('assignments'));
    }
}