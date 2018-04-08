<?php

namespace App\Repositories\Frontend;

use App\Models\Prescription;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

/**
 * Class UserRepository.
 */
class PrescriptionRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Prescription::class;
    }
    
    public function getPrescriptionListById($patientId)
    {
        return $this->where('patient_id',$patientId)->get();
    }
    

    /**
     * 
     * @param array $data
     * @return \App\Repositories\Backend\Auth\Hospital
     */
    public function create(array $data) : Prescription
    {
        $result =  DB::transaction(function () use ($data) {

             $treatmentRepo = new TreatmentRepository();
             $trId = $treatmentRepo->create($data)->id;

            $prescription = parent::create([
                'patient_id' => $data['patient_id'],
                'user_id' => $data['user_id'],
                'doctor_id' => isset($data['doctor_id']) ? $data['doctor_id'] : NULL,
                'doctor_name' => isset($data['doctor_name']) ? $data['doctor_name'] : NULL,
                'treatment_id' => $trId, // Call Save For Treatment

                'title' => $data['title'],
                'is_active' => isset($data['is_active']) && $data['is_active'] == '1' ? 1 : 0,  
                'description' => $data['description'],
                'diseases' => (isset($data['diseases']) && count($data['diseases'])) ? json_encode($data['diseases']) : NULL,
//                'hospital_id' => isset($data['hospital_id']) ? $data['hospital_id'] : '',
            ]);
            if ($prescription) {
                return $prescription;
            }
            throw new GeneralException(__('exceptions.backend.access.hospitals.create_error'));
        });

        return $result;
    }

    protected function getTreatmentId($data){
        $treatmentRepo = new TreatmentRepository();
        return $treatmentRepo->create($data)->id;
    }

}
