<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Repositories\Frontend\Auth\UserRepository;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;
use App\Http\Requests\Frontend\User\UpdateBloodGroupRequest;
use App\Http\Requests\Frontend\User\UpdateAllergiesRequest;

/**
 * Class ProfileController.
 */
class ProfileController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * ProfileController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param UpdateProfileRequest $request
     *
     * @return mixed
     */
    public function update(UpdateProfileRequest $request)
    {
        $output = $this->userRepository->update(
            $request->user()->id,
            $request->only('first_name', 'last_name', 'email', 'avatar_type', 'avatar_location', 'timezone'),
            $request->has('avatar_location') ? $request->file('avatar_location') : false
        );

        // E-mail address was updated, user has to reconfirm
        if (is_array($output) && $output['email_changed']) {
            auth()->logout();

            return redirect()->route('frontend.auth.login')->withFlashInfo(__('strings.frontend.user.email_changed_notice'));
        }

        return redirect()->route('frontend.user.account')->withFlashSuccess(__('strings.frontend.user.profile_updated'));
    }

    /**
     * @param UpdateProfileRequest $request
     *
     * @return mixed
     */
    public function updateBloodGroup(UpdateBloodGroupRequest $request)
    {
        $this->userRepository->updateBloodGroup(
            $request->user()->id, $request->get('blood_group'));

        return back()->withFlashSuccess(__('strings.frontend.user.blood_group_updated'));
    }

    /**
     * @param UpdateProfileRequest $request
     *
     * @return mixed
     */
    public function updateAllergies(UpdateAllergiesRequest $request)
    {
        $this->userRepository->updateAllergies(
            $request->user()->id, $request->get('allergies'));

        return back()->withFlashSuccess(__('strings.frontend.user.allergy_updated'));
    }
}
