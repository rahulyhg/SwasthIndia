<?php

namespace App\Http\Controllers\Frontend\Prescription;

use Illuminate\Http\Request;
use App\Models\Prescription;
use App\Http\Controllers\Controller;
use App\Repositories\Frontend\PrescriptionRepository;
use App\Repositories\Backend\Auth\HospitalRepository;
use App\Repositories\Backend\DiseaseRepository;
use App\Http\Requests\Frontend\Prescription\ManagePrescriptionRequest;
use App\Http\Requests\Frontend\Prescription\StorePrescriptionRequest;


class PrescriptionController extends Controller
{
    
    /**
     * @var PrescriptionRepository
     */
    protected $prescriptionRepository;

    /**
     * PrescriptionController constructor.
     *
     * @param PrescriptionRepository $prescriptionRepository
     */
    public function __construct(PrescriptionRepository $prescriptionRepository)
    {
        $this->prescriptionRepository = $prescriptionRepository;
    }
    
    
    /**
     * @param ManagePrescriptionRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManagePrescriptionRequest $request)
    {
        return view('frontend.prescription.index')
            ->withDiseases($this->prescriptionRepository->getActivePaginated(25, 'id', 'asc'));
    }
    
    
    /**
     * @param Request    $request
     *
     * @return mixed
     */
    public function create(Request $request)
    {   
        return view('frontend.prescription.create')
                ->withHospitals($names = array_pluck(HospitalRepository::getNames(), 'name', 'id'))
                ->withDiseases($names = array_pluck(DiseaseRepository::getNames(), 'name', 'id'))
                ->withPatientid(auth()->id());
    }
    
     /**
     * @param StorePrescriptionRequest $request
     *
     * @return mixed
     */
    public function store(StorePrescriptionRequest $request)
    {
        echo "<pre>";dd($request->all());die;


        $this->prescriptionRepository->create($request->only(
                'patient_id',
                'title',
                'description',
                'disease',
                'images',
                'hospital_id',
                'is_active'
        ));

        return redirect()->route('frontend.prescription.index')->withFlashSuccess(__('alerts.frontend.prescription.created'));
    }
    
    
    /**
     * @param Prescription $prescription
     * @param ManagePrescriptionRequest $prescription
     *
     * @return mixed
     */
    public function show(Disease $disease, ManageDiseaseRequest $request)
    {
        return view('backend.disease.show')
            ->withDisease($disease);
    }
}
    
