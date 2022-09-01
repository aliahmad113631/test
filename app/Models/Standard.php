<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Standard
 *
 * @property $id
 * @property $name
 * @property $total_students
 * @property $created_at
 * @property $updated_at
 *
 * @property TeacherCourse[] $teacherCourses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Standard extends Model
{
    
    static $rules = [
		'name' => 'required',
		'total_students' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','total_students'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teacherCourses()
    {
        return $this->hasMany('App\Models\TeacherCourse', 'standard_id', 'id');
    }
    

}
