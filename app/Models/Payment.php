<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function finance()
    {
        return $this->belongsTo(Finance::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
