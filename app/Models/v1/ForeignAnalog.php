<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForeignAnalog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function getAllForeignAnalogs(){

    }

}
