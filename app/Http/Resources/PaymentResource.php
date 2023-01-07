<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'client_id' => $this->client_id,
            'financy_id' => $this->financy_id,
            'sale_price' => $this->sale_price,
            'paid' => $this->paid,
            'payment_kind' => $this->payment_kind,
            'all_paid' => $this->all_paid,
            'residual' => $this->residual,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
