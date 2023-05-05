<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_has_role extends Model
{
    protected $fillable = ['role_id','model_id','model_type'];

    use HasFactory;
    public function teacher()
    {
        return $this->belongsToMany('App\Models\User', 'id','model_id');
        //return $this->hasOne('App\Models\Type', 'id','type_id');
    }
}
