<?php

namespace App\Repositories\Backend\Auth;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;
use App\Models\Auth\Hospital;
/**
 * Class UserRepository.
 */
class HospitalRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Hospital::class;
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
                'name' => $data['name'],
                'city' => $data['city'],
                'state' => $data['state'],
                'address' => $data['address'],
                'active' => isset($data['active']) && $data['active'] == '1' ? 1 : 0
            ]);

            if ($hospital) {
                return $hospital;
            }

            throw new GeneralException(__('exceptions.backend.access.hospitals.create_error'));
        });
    }
    
    /**
     * @param User  $hospital
     * @param array $data
     *
     * @return User
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     */
    public function update(Hospital $hospital, array $data) : Hospital
    {
        return DB::transaction(function () use ($hospital, $data) {
            if ($hospital->update([
                'name' => $data['name'],
                'city' => $data['city'],
                'state' => $data['state'],
                'address' => $data['address'],
                'active' => !empty($data['active']) ? $data['active'] : 0,
            ])) {

                return $hospital;
            }

            throw new GeneralException(__('exceptions.backend.access.hospitals.update_error'));
        });
    }
    
    public function toggleStatus($id)
    {
        return DB::transaction(function () use ($id) {
            $hospital = $this->model->find($id);
            if ($hospital->update([
                'active' => $hospital->active ? 0 : 1,
            ])) {

                return true;
            }

            throw new GeneralException(__('exceptions.backend.access.hospitals.update_error'));
        });
    }
    
    public static function getNames()
    {   
        return Hospital::select(['id','name'])
                ->where('active', 1)
                ->get()->toArray();
    }

}
