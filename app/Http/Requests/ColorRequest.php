<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColorRequest extends FormRequest
{
    /**
     * store validation
     */
    public function storeRequests()
    {
        return [
            'name'      =>  'required',
        ];
    }
     
    /**
     * Update validation
     */
    public function updateRequests()
    {
        return [
            'name'      =>  'required',
        ];
    }

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return request()->method() == 'PUT' ? $this->updateRequests() : $this->storeRequests();
    }
}
