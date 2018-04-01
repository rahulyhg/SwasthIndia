<?php

namespace App\Repositories\Backend\Auth;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;

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

}
