<?php

namespace App\Repositories\Backend;

use App\Models\Disease;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

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
    
     /**
     * @param Disease  $user
     * @param array $data
     *
     * @return Disease
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     */
    public function update(Disease $disease, array $data) : Disease
    {
        return DB::transaction(function () use ($disease, $data) {
            if ($disease->update([
                'name' => $data['name'],
                'type' => $data['type']
            ])) {
                return $disease;
            }

            throw new GeneralException(__('exceptions.backend.access.users.update_error'));
        });
    }

}
