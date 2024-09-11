<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorPatientController extends Controller
{
    public function index()
    {
        // Advanced Join Statement
        $doctorPatients = Doctor::join('doctor_patient', 'doctors.id', '=', 'doctor_patient.doctor_id')
            ->join('patients', 'patients.id', '=', 'doctor_patient.patient_id')
            ->select('doctors.name as doctor_name', 'doctors.specialization', 'patients.name as patient_name', 'patients.ailment')
            ->get();

        return view('doctor_patient.index', compact('doctorPatients'));
    }
}