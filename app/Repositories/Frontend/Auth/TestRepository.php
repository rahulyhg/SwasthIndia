<?php

namespace App\Repositories\Frontend\Auth;

use Carbon\Carbon;
use App\Models\Test;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

/**
 * Class TestRepository.
 */
class TestRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Test::class;
    }

    /**
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model|mixed
     * @throws \Exception
     * @throws \Throwable
     */
    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            $test = parent::create([
                    'name' => $data['name'],
            ]);

            return $test;
        });
    }

    /**
     * @param       $id
     * @param array $input
     * @param bool|UploadedFile  $image
     *
     * @return array|bool
     * @throws GeneralException
     */
    public function update($id, array $input)
    {
        $test = $this->getById($id);
        $test->name = $input['name'];
        $updated = $test->save();

        return [
            'success' => $updated
        ];
    }

}
