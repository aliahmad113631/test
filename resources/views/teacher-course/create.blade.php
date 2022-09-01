@extends('layouts.app')

@section('template_title')
    Create Teacher Course
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Teacher Course</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('teacher-courses.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('teacher-course.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
