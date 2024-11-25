<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

      use HasFactory;
    protected $fillable = ['id', 'description','detail','type_id','folder_certification','registry','brochure'];
    public function type()
    {

        return $this->hasOne('App\Models\Type', 'id','type_id');
    }
    public function registry_detail()
    {

        return $this->hasMany('App\Models\RegistryDetail', 'course_id','id');
    }
        public function registry()
    {

        return $this->hasMany('App\Models\Registry', 'id','course_id');
    }
      public function certification()
    {

        return $this->belongsTo('App\Models\Certification', 'id','course_id');
    }
}
