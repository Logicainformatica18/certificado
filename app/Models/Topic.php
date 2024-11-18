<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id','description','post','instruction', 'point','detail'];
        public function course()
    {

        return $this->hasOne('App\Models\Course', 'id','course_id');
    }
}
