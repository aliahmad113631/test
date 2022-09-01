@extends('layouts.app')

@section('template_title')
    {{ $teacherCourse->name ?? 'Show Teacher Course' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Teacher Course</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teacher-courses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Instructor Id:</strong>
                            {{ $teacherCourse->instructor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Standard Id:</strong>
                            {{ $teacherCourse->standard_id }}
                        </div>
                        <div class="form-group">
                            <strong>Course Id:</strong>
                            {{ $teacherCourse->course_id }}
                        </div>
                        <div class="form-group">
                            <strong>Duration:</strong>
                            {{ $teacherCourse->duration }}
                        </div>
                        <div class="form-group">
                            <strong>Time:</strong>
                            {{ $teacherCourse->time }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
