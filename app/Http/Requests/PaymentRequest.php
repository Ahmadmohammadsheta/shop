<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
         /**
     * store validation
     */
    public function storeRequests()
    {
        return [
            'product_id'  =>  'required', 
            'client_id'  =>  'required', 
            'finance_id'  =>  'required', 
            'sale_price'   =>  'required',
            'paid'      =>  'required',
            'payment_kind'   =>  'required',
            'all_paid'  => 'nullable',
            'residual' => 'required'
        ];
    }
     
    /**
     * Update validation
     */
    public function updateRequests()
    {
       
        return [
            'product_id'  =>  'required', 
            'client_id'  =>  'required', 
            'finance_id'  =>  'required', 
            'sale_price'   =>  'required',
            'paid'      =>  'required',
            'payment_kind'   =>  'required',
            'all_paid'  => 'nullable',
            'residual' => 'required'
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
