<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // Membuat array data karyawan
        $employees = [
            ['id' => 1, 'name' => 'Alice Johnson', 'position' => 'Manager', 'email' => 'alice@example.com'],
            ['id' => 2, 'name' => 'Robert Williams', 'position' => 'Developer', 'email' => 'robert@example.com'],
            ['id' => 3, 'name' => 'Emily Davis', 'position' => 'Designer', 'email' => 'emily@example.com'],
            ['id' => 4, 'name' => 'Michael Brown', 'position' => 'Analyst', 'email' => 'michael@example.com'],
            ['id' => 5, 'name' => 'Sophia Wilson', 'position' => 'Developer', 'email' => 'sophia@example.com'],
            ['id' => 6, 'name' => 'William Martinez', 'position' => 'Tester', 'email' => 'william@example.com'],
            ['id' => 7, 'name' => 'Olivia Anderson', 'position' => 'HR', 'email' => 'olivia@example.com'],
            ['id' => 8, 'name' => 'James Thomas', 'position' => 'Consultant', 'email' => 'james@example.com'],
            ['id' => 9, 'name' => 'Charlotte Jackson', 'position' => 'Support', 'email' => 'charlotte@example.com'],
            ['id' => 10, 'name' => 'Henry White', 'position' => 'Manager', 'email' => 'henry@example.com'],
        ];

        // Mengirim data ke view 'employees.index'
        return view('employees.index', compact('employees'));
    }
}