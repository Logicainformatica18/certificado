<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
        public function certification()
    {

        return $this->hasOne('App\Models\Certification', 'id','certification_id');
    }
    public function qualification()
    {

        return $this->belongsTo('App\Models\Qualification', 'id','exam_id');
    }
}
