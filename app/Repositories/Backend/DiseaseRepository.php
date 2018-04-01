<?php

namespace App\Repositories\Backend;

use App\Models\Disease;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class UserRepository.
 */
class DiseaseRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Disease::class;
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
