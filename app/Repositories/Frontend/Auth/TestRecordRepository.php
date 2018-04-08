<?php

namespace App\Repositories\Frontend\Auth;

use App\Models\TestRecord;
use App\Models\TestRecordDocument;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

/**
 * Class TestRepository.
 */
class TestRecordRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return TestRecord::class;
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
        $user = auth()->user();

        return DB::transaction(function () use ($data, $user) {
            $test_records = parent::create([
                    'description' => $data['description'],
                    'test_id' => $data['test_id'],
                    'prescription_id'=> $data['prescription_id'],
                    'patient_id' => $user->id
            ]);

            foreach ($data['test_records_files'] as $document) {
                $filename = time() . '-' . $document->getClientOriginalName();
                $filetype = $document->getMimeType();
                $document->move(storage_path('/app/public/test_records/'.$filename));

                TestRecordDocument::create([
                    'test_record_id' => $test_records->id,
                    'document' => $filename,
                    'type' => $filetype,
                ]);
            }

            return $test_records;
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
