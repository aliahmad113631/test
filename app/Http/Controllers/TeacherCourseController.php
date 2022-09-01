<?php

namespace App\Http\Controllers;

use App\Models\TeacherCourse;
use App\Models\Course;
use App\Models\Standard;
use App\Models\Instructor;

use Illuminate\Http\Request;

/**
 * Class TeacherCourseController
 * @package App\Http\Controllers
 */
class TeacherCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacherCourses = TeacherCourse::paginate();

        return view('teacher-course.index', compact('teacherCourses'))
            ->with('i', (request()->input('page', 1) - 1) * $teacherCourses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructors = Instructor::all();
        $courses = Course::all();
        $standards = Standard::all();
        $teacherCourse = new TeacherCourse();
        return view('teacher-course.create', compact('teacherCourse', 'instructors','courses','standards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        request()->validate(TeacherCourse::$rules);

        $checkCourseClass = TeacherCourse::where('instructor_id',$request->instructor_id)->where('course_id',$request->course_id)->where('standard_id',$request->standard_id)->first();
        $checkTeacher = TeacherCourse::where('time',$request->time)->where('instructor_id','!=',$request->instructor_id)->first();
        $checkInstructorTime = TeacherCourse::where('time',$request->time)->where('instructor_id',$request->instructor_id)->first();
        if($checkInstructorTime != null){
            return back()->with('error', 'This Course is already Assigned Or the instructor is already assigned a course at this time Or The instructor is already assigned with other course.');
        }
        else if($checkTeacher != null){
            if($checkCourseClass != null){
                return back()->with('error', 'Please check time and course to be assigned.');
            }
            $teacherCourse = TeacherCourse::create($request->all());
        }    
            else{
            $teacherCourse = TeacherCourse::create($request->all());
        }

        return redirect()->route('teacher-courses.index')
            ->with('success', 'TeacherCourse created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructors = Instructor::all();
        $courses = Course::all();
        $standards = Standard::all();
        $teacherCourse = TeacherCourse::find($id);

        return view('teacher-course.edit', compact('teacherCourse' ,'instructors','courses','standards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TeacherCourse $teacherCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherCourse $teacherCourse)
    {
        request()->validate(TeacherCourse::$rules);

        $teacherCourse->update($request->all());

        return redirect()->route('teacher-courses.index')
            ->with('success', 'TeacherCourse updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $teacherCourse = TeacherCourse::find($id)->delete();

        return redirect()->route('teacher-courses.index')
            ->with('success', 'TeacherCourse deleted successfully');
    }
}
