<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
     'video', 'type',  'course_id','user_id','description','post','instruction', 'point','detail','resource_1','resource_2','time','image_1','image_2','file_1','file_2'];
        public function course()
    {

        return $this->hasOne('App\Models\Course', 'id','course_id');
    }
    public function categoryDetail()
    {

        return $this->hasMany('App\Models\CategoryDetail', 'topic_id','id');
    }
    public function user()
    {

        return $this->hasOne('App\Models\User', 'id','user_id');
    }
    public function topicsByCategory($course_id, $category)
{
    $course = Course::findOrFail($course_id);

    $topics = Topic::with(['categories', 'user'])
        ->where('course_id', $course_id)
        ->get()
        ->filter(function ($topic) use ($category) {
            return $topic->categories->contains(function ($cat) use ($category) {
                return strtolower($cat->description) === strtolower($category);
            });
        });

    return view('topics_by_category', compact('topics', 'course', 'category'));
}

    public function categories()
{
    return $this->hasManyThrough(
        \App\Models\Category::class,
        \App\Models\CategoryDetail::class,
        'topic_id',     // Foreign key on CategoryDetail
        'id',           // Local key on Category
        'id',           // Local key on Topic
        'category_id'   // Foreign key on CategoryDetail
    );
}

}
