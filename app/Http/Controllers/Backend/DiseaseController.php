<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ManageDiseaseRequest;
use App\Repositories\Backend\DiseaseRepository;
use App\Models\Disease;
use App\Http\Requests\Backend\StoreDiseaseRequest;

/**
 * Class DiseaseController.
 */
class DiseaseController extends Controller
{
        /**
     * @var UserRepository
     */
    protected $diseaseRepository;

    /**
     * UserController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(DiseaseRepository $diseaseRepository)
    {
        $this->diseaseRepository = $diseaseRepository;
    }

    /**
     * @param ManageDiseaseRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageDiseaseRequest $request)
    {
        return view('backend.disease.index')
            ->withDiseases($this->diseaseRepository->getActivePaginated(25, 'id', 'asc'));
    }
    
    /**
     * @param ManageDiseaseRequest    $request
     *
     * @return mixed
     */
    public function create(ManageDiseaseRequest $request)
    {
        return view('backend.disease.create');
    }
    
    /**
     * @param StoreDiseaseRequest $request
     *
     * @return mixed
     */
    public function store(StoreDiseaseRequest $request)
    {
        $this->diseaseRepository->create($request->only(
            'name',
            'type'
        ));

        return redirect()->route('admin.disease.index')->withFlashSuccess(__('alerts.backend.disease.created'));
    }
    
    /**
     * @param Disease $disease
     * @param ManageDiseaseRequest $request
     *
     * @return mixed
     */
    public function show(Disease $disease, ManageDiseaseRequest $request)
    {
        return view('backend.disease.show')
            ->withDisease($disease);
    }
      /**
     * @param Disease $disease
     * @param ManageDiseaseRequest $request
     *
     * @return mixed
     */
    public function destroy(Disease $disease, ManageDiseaseRequest $request)
    {
        $this->diseaseRepository->deleteById($disease->id);

        return redirect()->route('admin.auth.disease.deleted')->withFlashSuccess(__('alerts.backend.users.deleted'));
    }

}
