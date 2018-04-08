<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Requests\Frontend\TestRecord\StoreTestRecordRequest;
use App\Models\TestRecord;
use App\Repositories\Frontend\Auth\TestRecordRepository;
use App\Repositories\Frontend\Auth\TestRepository;
use App\Repositories\Frontend\PrescriptionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestRecordController extends Controller
{
    /**
     * @var TestRepository
     */
    protected $testRepository;
    protected $prescriptionRepository;
    protected $testRecordRepository;

    /**
     * ProfileController constructor.
     *
     * @param TestRepository $testRepository
     * @param PrescriptionRepository $prescriptionRepository
     * @param TestRecordRepository $testRecordRepository
     */
    public function __construct(TestRepository $testRepository, PrescriptionRepository $prescriptionRepository, TestRecordRepository $testRecordRepository)
    {
        $this->testRepository = $testRepository;
        $this->prescriptionRepository = $prescriptionRepository;
        $this->testRecordRepository = $testRecordRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('frontend.test_report.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tests = $this->testRepository->get(['id','name'])->mapWithKeys(function ($item){
            return [$item->id =>$item->name];
        });
        $prescriptions = $this->prescriptionRepository->getPrescriptionListById(auth()->user()->id)->mapWithKeys(function ($item){
            return [$item->id =>$item->name];
        });;
        return view('frontend.test_report.create',compact(['tests','prescriptions']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestRecordRequest $request)
    {


        $this->testRecordRepository->create($request->all());


        return redirect()->route('frontend.user.test_record.create')->withFlashSuccess(__('alerts.frontend.test_record.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $testRecords
     * @return \Illuminate\Http\Response
     */
    public function show(TestRecord $testRecords)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $testRecords
     * @return \Illuminate\Http\Response
     */
    public function edit(TestRecord $testRecords)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $testRecords
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestRecord $testRecords)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $testRecords
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestRecord $testRecords)
    {
        //
    }
}
