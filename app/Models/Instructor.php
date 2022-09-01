<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Instructor
 *
 * @property $id
 * @property $name
 * @property $qualification
 * @property $created_at
 * @property $updated_at
 *
 * @property TeacherCourse[] $teacherCourses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Instructor extends Model
{
    
    static $rules = [
		'name' => 'required',
		'qualification' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','qualification'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teacherCourses()
    {
        return $this->hasMany('App\Models\TeacherCourse', 'instructor_id', 'id');
    }
    

}
