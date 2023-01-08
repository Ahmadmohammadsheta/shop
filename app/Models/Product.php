<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    /**
     * relations
     */
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }


}
