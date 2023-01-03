<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{


          /**
     * store validation
     */
    public function storeRequests()
    {
        return [
            'name'      =>  'required',
            'category_id' =>  'required', 
            'description' => 'required',
            'product_code' => 'required'
        ];
    }
     
    /**
     * Update validation
     */
    public function updateRequests()
    {
       
        return [
            'name'      =>  'required',
            'category_id' =>  'required', 
            'description' => 'nullable',
            'product_code' => 'required'
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

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages()
    {
        return [
            'name.required'             => 'يجب ادخال اسم',
            'category_id.required'      => 'التصنيف مطلوب',
            'item_unit_id.required'     => 'مطلوب',
            'unit_parts_count.required' => 'مطلوب',
            'sale_price.required'       => 'مطلوب',
            'item_code.required'        => 'موجود من قبل',
        ];
    }
}
