<?php

namespace App\Http\Requests\Frontend\User;

use Illuminate\Validation\Rule;
use Arcanedev\NoCaptcha\Rules\CaptchaRule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class RegisterDoctorRequest.
 */
class RegisterDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !auth()->user()->isDoctor();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'degree'           => 'required|string|max:191',
            'specialisation'   => 'required|string|max:191',
            'upload_documents' => 'required',
        ];
    }
}
