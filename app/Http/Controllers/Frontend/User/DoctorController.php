<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Frontend\Auth\DoctorRepository;
use App\Http\Requests\Frontend\User\RegisterDoctorRequest;

class DoctorController extends Controller
{
    
    protected $doctor;
    
    public function __construct(DoctorRepository $doctor)
    {
        $this->doctor = $doctor;
    }
    
    public function create(Request $request)
    {
        if (auth()->user()->appliedDoctor()) {
            
            return redirect()->route('frontend.user.account')->withFlashDanger(trans('exceptions.frontend.auth.already-doctor', ['email' => config('access.admin_email')]));
        }
        return view('frontend.user.account.tabs.register-doctor');
    }
    public function register(RegisterDoctorRequest $request)
    {
        if (auth()->user()->appliedDoctor()) {
            return redirect()->route('frontend.user.account')->withFashWarning(trans('exceptions.frontend.auth.already-doctor'));
        }
        
        $this->doctor->create($request->all());
        return redirect()->route('frontend.user.account')->withFlashSuccess(trans('alerts.frontend.user.register-doctor'));
    }
}
