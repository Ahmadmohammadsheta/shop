<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
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
            'color_id' => $this->color_id,
            'size_id' => $this->size_id,
            'sale_price' => $this->sale_price,
            'bay_price' => $this->bay_price,
            'bay_discount' => $this->bay_discount,
            'quantity' => $this->quantity,
            'min_quantity' => $this->min_quantity,
            'trader_id' => $this->trader_id,
            'stock_code' => $this->stock_code,
            'barcode' => $this->barcode,
            
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
