<?php

namespace App\Repositories\Frontend\Auth;

use Carbon\Carbon;
use App\Models\Auth\DoctorDetail;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use App\Models\Auth\DoctorDegree;
use Mail;

/**
 * Class DoctorRepository.
 */
class DoctorRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return DoctorDetail::class;
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
            $doctor_degrees = [];
            foreach ($data['upload_documents'] as $document) {
                $filename = time() . '-' . $document->getClientOriginalName();
                $document->move(storage_path('/app/public/doctor/'.$filename));
                array_push($doctor_degrees, DoctorDegree::create([
                    'doctor_id' => $user->id,
                    'file_name' => $filename,
                ]));
            }
            $doctor_detail = parent::create([
                'degree'         => $data['degree'],
                'user_id'        => $user->id,
                'specialisation' => $data['specialisation'],
                'surgeon'        => !empty($data['surgeon']) ? 1 : 0,
            ]); 
            

            if ($doctor_detail && is_array($doctor_degrees) && count($doctor_degrees)) {
                
                //send email for doctor details
                Mail::send('frontend.mail.admin.doctor', 
                    ['user' => $user, 'detail' => $doctor_detail], 
                        function($message) use ($doctor_degrees) {
                            $message->to(config('access.admin_mail'))
                                ->subject('User request to become a doctor');
                            foreach ($doctor_degrees as $degree) {
                                $message->attach(storage_path('app/public/doctor/' . $degree->file_name));
                            }
                });
            }

            /*
             * Return the user object
             */
            return $user;
        });
    }
}
