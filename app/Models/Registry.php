<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registry extends Model
{
    use HasFactory;
    protected $fillable = ['id','description','course_id','teacher_m','teacher_t','teacher_r','assistance_t',
    'assistance_r','assistance_m','schedule_id','detail'];

    public function course()
    {
        return $this->hasOne('App\Models\Course', 'id','course_id');

    }
    public function schedule()
    {
        return $this->hasOne('App\Models\Schedule', 'id','schedule_id');

    }
    public function teacher(){

          // agregamos el id de la tabla asociativa - pivot
       //   return $this->belongsToMany('Spatie\Permission\Models\Role', 'model_has_roles','model_id')
            //pertenece a muchas roles - agregamos el id de la tabla asociativa - pivot
            return $this->belongsToMany('App\Models\User', 'model_has_roles',['model_id','model_type','role_id'],'id');
        }




 }
