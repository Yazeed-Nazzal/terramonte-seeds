<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Variance extends Model implements HasMedia
{
    protected $guarded;
    use HasFactory,InteractsWithMedia;

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
    public function branches(){
        return $this->hasMany(Branch::class,'variance_id');
    }
}
