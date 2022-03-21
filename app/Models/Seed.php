<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Seed extends Model implements  HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected  $table="seeds";

    protected $guarded = [];

    public function branch(){
        return $this->belongsTo(Branch::class ,  'branch_id');
    }
}
