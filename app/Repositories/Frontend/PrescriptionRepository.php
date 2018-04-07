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
    
      /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getActivePaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc') : LengthAwarePaginator
    {
        return $this->model
            ->orderBy($orderBy, $sort)
            ->paginate($paged);
    }


    /**
     * 
     * @param array $data
     * @return \App\Repositories\Backend\Auth\Hospital
     */
    public function create(array $data) : Hospital
    {
        return DB::transaction(function () use ($data) {

            $hospital = parent::create([
                'patient_id' => $data['patient_id'],
                'user_id' => $data['user_id'],
                'doctor_id' => $data['doctor_id'],
                'doctor_name' => isset($data['doctor_name']),
                'title' => $data['title'],
/********/      'treatment_id' => $data['treatment_id'] ? 1 : 1, // Call Save For Treatment
                'is_active' => isset($data['is_active']) && $data['is_active'] == '1' ? 1 : 0
                'description' => $data['description'],
                'disease' => (isset($data['description']) && count($data['description'])) ? json_encode($data['description']) : NULL,
                'hospital_id' => $data['hospital_id'],
                'doctor_name' => isset($data['doctor_name']),
            ]);

            if ($hospital) {
                return $hospital;
            }

            throw new GeneralException(__('exceptions.backend.access.hospitals.create_error'));
        });
    }

}
