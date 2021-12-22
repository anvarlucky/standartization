<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classification extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function getAllClassifications(){

    }

    public function category(){
        return $this->belongsTo('App\Models\v1\Category');
    }

    public function doctypes(){
        return $this->hasMany('App\Models\v1\DocType');
    }
}
