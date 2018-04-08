<?php

namespace App\Http\Requests\Frontend\TestRecord;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreUserRequest.
 */
class StoreTestRecordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'test_id'     => 'required|max:191',
            'prescription_id'  => 'nullable|integer',
            'test_records_files'  => 'required',
            'description'  => 'required'
        ];
    }
}
