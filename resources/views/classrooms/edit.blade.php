@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classrooms
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classrooms, ['route' => ['classrooms.update', $classrooms->classroom_id], 'method' => 'patch']) !!}

                    <!-- Course Name Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('classroom_name', 'Classroom Name:') !!}
                        {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Course Code Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('classroom_code', 'Classroom Code:') !!}
                        {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Description Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('classroom_description', 'Class Description:') !!}
                        {!! Form::textarea('classroom_description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2 ]) !!}
                    </div>

                    <!-- Status Field -->
                    <div class="form-group col-md-6" >
                        {!! Form::label('classroom_status', 'Classroom Status:') !!}
                        <label class="checkbox-inline">
                            {!! Form::hidden('classroom_status', 0) !!}
                            {!! Form::checkbox('classroom_status', '1', null) !!}
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
  
                {!! Form::submit('Update Classroom', ['class' => 'btn btn-info']) !!}
            
    
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection