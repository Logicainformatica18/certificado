<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistryDetail extends Model
{
    use HasFactory;
    protected $table = "registry_details";// <-- El nombre personalizado
    protected $fillable = ['id','student_id','registry_id'];
    public function student()
    {

        return $this->hasOne('App\Models\Student', 'id','student_id');
    }
    public function registry()
    {

        return $this->hasOne('App\Models\Registry', 'id','registry_id');
    }
}
