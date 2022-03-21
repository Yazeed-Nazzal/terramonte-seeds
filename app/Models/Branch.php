<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Branch extends Model implements  HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected  $table="branches";

    protected $guarded = [];

    public function variance(){
        return $this->belongsTo(Variance::class , 'variance_id');
    }

    public function seeds(){
        return $this->hasMany(Seed::class ,  'branch_id');
    }
}
