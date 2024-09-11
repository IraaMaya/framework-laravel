<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Ambil proyek yang belum diarsipkan (archived_at NULL)
        $projects = Project::whereNull('archived_at')->get();

        return view('projects.index', compact('projects'));
    }
}