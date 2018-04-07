<?php

namespace App\Http\Requests\Frontend\Prescription;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreUserRequest.
 */
class StorePrescriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'hospital_name'     => 'required|max:191',
//            'choice'  => 'required|integer',
//            'files'  => 'required|alphanumeric',
//            'disease'  => 'required',
//            'text'  => '',
//            'title'  => '',
//            'doctor'  => 'required',
        ];
    }
}
