<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];
    protected $table = 'images';

    public function standart(){
        //return $this->belongsToMany('App\Models\v1\Standart');
        //return $this->belongsToMany('App\Models\v1\Standart', 'images','id')->withTimestamps();
        //return $this->belongsTo('App\Models\v1\Standart');
    }
    
}
