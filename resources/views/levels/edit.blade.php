@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Level
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($level, ['route' => ['levels.update', $level->level_id], 'method' => 'patch']) !!}

                   <div class="modal-body">
                        <!-- Level Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('level', 'Level:') !!}
                            {!! Form::text('level', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Course Id Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('course_id', 'Course Title:') !!}
                            <select class="form-control" name="course_id", id="course_id">
                            <option value="">Select Course</option>
                                @foreach ($course as $cour)
                                <option value="{{$cour->course_id}}">{{$cour->course_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Level Description Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('level_description', 'Level Description:') !!}
                            {!! Form::textarea('level_description', null, ['class' => 'form-control']) !!}
                        </div>

                        

                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {!! Form::submit('Save Level', ['class' => 'btn btn-success']) !!}
                        </div>

                        @include('levels.fields')

                   {!! Form::close() !!}
               </div>
               </div>
           </div>
       </div>
   </div>
@endsection