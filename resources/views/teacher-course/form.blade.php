<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            
            {{ Form::label('instructor') }}
            <select name="instructor_id"  class="form-select" id="instructor_id">
                <option value="">--Select--</option>
                @foreach($instructors as $instructor)
                <option value="{{$instructor->id}}" {{$teacherCourse->instructor_id == $instructor->id  ? 'selected' : ''}}>{{$instructor->name}}</option>
                @endforeach
            </select>
            {!! $errors->first('instructor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('standard') }}
            <select name="standard_id"  class="form-select" id="standard_id">
                <option value="">--Select--</option>
                @foreach($standards as $standard)
                <option value="{{$standard->id}}" {{$teacherCourse->standard_id == $standard->id  ? 'selected' : ''}}>{{$standard->name}}</option>
                @endforeach
            </select>
            {!! $errors->first('standard_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('course') }}
            <select name="course_id"  class="form-select" id="course_id">
                <option value="">--Select--</option>
                @foreach($courses as $course)
                <option value="{{$course->id}}"  {{$teacherCourse->course_id == $course->id  ? 'selected' : ''}}>{{$course->name}}</option>
                @endforeach
            </select>
            {!! $errors->first('course_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('duration') }}
            {{ Form::text('duration', $teacherCourse->duration, ['class' => 'form-control' . ($errors->has('duration') ? ' is-invalid' : ''), 'placeholder' => 'Duration']) }}
            {!! $errors->first('duration', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time') }}
            <select name="time"  class="form-select" id="time">
                <option value="">--Select--</option>
                <option value="08:30-09:15" {{$teacherCourse->time == '08:30-09:15'  ? 'selected' : ''}}>08:30-09:15</option>
                <option value="09-15-10:00" {{$teacherCourse->time == '09-15-10:00'  ? 'selected' : ''}}>09-15-10:00</option>
                <option value="10:30-11:15" {{$teacherCourse->time == '10:30-11:15'  ? 'selected' : ''}}>10:30-11:15</option>
                <option value="11:15-12:00" {{$teacherCourse->time == '11:15-12:00'  ? 'selected' : ''}}>11:15-12:00</option>
                
            </select>
            {!! $errors->first('time', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>