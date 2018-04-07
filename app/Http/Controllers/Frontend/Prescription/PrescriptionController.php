<?php

namespace App\Http\Controllers\Frontend\Prescription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Auth\HospitalRepository;
use App\Repositories\Backend\DiseaseRepository;

class PrescriptionController extends Controller
{
    public function create(Request $request)
    {   
        return view('frontend.prescription.create')
                ->withHospitals($names = array_pluck(HospitalRepository::getNames(), 'name', 'id'))
                ->withDiseases($names = array_pluck(DiseaseRepository::getNames(), 'name', 'id'))
                ->withPatientid(auth()->id())
                ->withUserid(auth()->id());
    }
}
