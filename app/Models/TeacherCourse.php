<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TeacherCourse
 *
 * @property $id
 * @property $instructor_id
 * @property $standard_id
 * @property $course_id
 * @property $duration
 * @property $time
 * @property $created_at
 * @property $updated_at
 *
 * @property Course $course
 * @property Instructor $instructor
 * @property Standard $standard
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TeacherCourse extends Model
{
    
    static $rules = [
		'instructor_id' => 'required',
		'standard_id' => 'required',
		'course_id' => 'required',
		'duration' => 'required',
		'time' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['instructor_id','standard_id','course_id','duration','time'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function course()
    {
        return $this->hasOne('App\Models\Course', 'id', 'course_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function instructor()
    {
        return $this->hasOne('App\Models\Instructor', 'id', 'instructor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function standard()
    {
        return $this->hasOne('App\Models\Standard', 'id', 'standard_id');
    }
    

}
