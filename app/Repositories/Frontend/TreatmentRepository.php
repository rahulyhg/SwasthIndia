<?php

namespace App\Repositories\Frontend;

use App\Models\Treatment;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

/**
 * Class UserRepository.
 */
class TreatmentRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Treatment::class;
    }


    /**
     * 
     * @param array $data
     * @return \App\Repositories\Backend\Auth\Hospital
     */
    public function create(array $data) : Treatment
    {
        return DB::transaction(function () use ($data) {

            $treatment = parent::create([
                'patient_id' => $data['patient_id'],
                'name' => $data['treatment_id'],
            ]);

            if ($treatment) {
                return $treatment;
            }

            throw new GeneralException(__('exceptions.backend.access.hospitals.create_error'));
        });
    }

}
