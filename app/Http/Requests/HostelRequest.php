<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HostelRequest extends FormRequest
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
            'hostel_name' => 'required',
            'town' => 'required',
            'state' => 'required',
            'address' => 'required',
            'property' => 'required',
            'amount' => 'required',
            'period' => 'required',
            'Amenities' => 'required',
            'utilities' => 'required',
            'rules' => 'required',
            'tenantType' => 'required',
            'image_name' => 'required',
        ];
    }
}
