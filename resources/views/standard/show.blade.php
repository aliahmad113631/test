@extends('layouts.app')

@section('template_title')
    {{ $standard->name ?? 'Show Standard' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Standard</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('standards.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $standard->name }}
                        </div>
                        <div class="form-group">
                            <strong>Total Students:</strong>
                            {{ $standard->total_students }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
