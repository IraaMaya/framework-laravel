<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageCourseRegistrationController extends Controller
{
    public function showForm()
    {
        return view('course_register');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'language' => 'required|string|in:english,spanish,french',
        ]);

        return redirect('/course/register')->with('success', 'Registration successful!');
    }
}