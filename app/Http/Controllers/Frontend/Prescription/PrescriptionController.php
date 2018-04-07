<?php

namespace App\Http\Controllers\Frontend\Prescription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrescriptionController extends Controller
{
    public function create(Request $request)
    {
        return view('frontend.prescription.create');
    }
}
