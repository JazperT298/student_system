@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Faculty
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($faculty, ['route' => ['faculties.update', $faculty->faculty_id], 'method' => 'patch']) !!}
                    <!-- Course Name Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('faculty_name', 'Faculty Name:') !!}
                        {!! Form::text('faculty_name', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Course Code Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('faculty_code', 'Faculty Code:') !!}
                        {!! Form::text('faculty_code', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Description Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('faculty_description', 'Faculty Description:') !!}
                        {!! Form::textarea('faculty_description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2 ]) !!}
                    </div>

                    <!-- Status Field -->
                    <div class="form-group col-md-6" >
                        {!! Form::label('faculty_status', 'Faculty Status:') !!}
                        <label class="checkbox-inline">
                            {!! Form::hidden('faculty_status', 0) !!}
                            {!! Form::checkbox('faculty_status', '1', null) !!}
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
  
                    {!! Form::submit('Update Faculty', ['class' => 'btn btn-info']) !!}
            
                    {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection