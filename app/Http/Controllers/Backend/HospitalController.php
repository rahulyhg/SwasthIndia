<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Auth\Hospital;
use App\Repositories\Backend\Auth\HospitalRepository;
use App\Http\Requests\Backend\Auth\Hospital\ManageHospitalRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\Hosptial\StoreHospitalRequest;
use App\Http\Requests\Backend\Auth\Hosptial\UpdateHospitalRequest;

class HospitalController extends Controller
{
    
    /**
     * @var UserRepository
     */
    protected $hospitalRepository;
    
    /**
     * 
     * @param \App\Http\Controllers\Backend\UserRepository $hospitalRepository
     */
    public function __construct(HospitalRepository $hospitalRepository)
    {
        $this->hospitalRepository = $hospitalRepository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ManageHospitalRequest $request)
    {
        return view('backend.hospital.index')
            ->withHospitals($this->hospitalRepository->getActivePaginated(25, 'id', 'asc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ManageHospitalRequest $request)
    {
        return view('backend.hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHospitalRequest $request)
    {
        $this->hospitalRepository->create($request->only(
            'name',
            'city',
            'state',
            'address',
            'active'
        ));

        return redirect()->route('admin.hospital.index')->withFlashSuccess(__('alerts.backend.hospitals.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital, ManageHospitalRequest $request)
    {
        return view('backend.hospital.show')
            ->withHospital($hospital);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital, ManageHospitalRequest $request)
    {
        return view('backend.hospital.edit')
            ->withHospital($hospital);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Hospital $hospital, UpdateHospitalRequest $request)
    {
        $this->hospitalRepository->update($hospital, $request->only(
            'name',
            'city',
            'state',
            'address',
            'active'
        ));

        return redirect()->route('admin.hospital.index')->withFlashSuccess(__('alerts.backend.hospitals.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {  
        $this->hospitalRepository->toggleStatus($id);

        return redirect()->route('admin.hospital.index')->withFlashSuccess(__('alerts.backend.hospitals.toggled'));
    }
}
