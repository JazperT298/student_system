@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Academic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($academic, ['route' => ['academics.update', $academic->academic_id], 'method' => 'patch']) !!}
                    <div class="modal-body">
                    <div class="input-group col-sm-10">
                        <span class="input-group-addon">Academics Year</span>
                        {!! Form::text('academic_year', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="modal-footer">
                            {!! Form::submit('Update Academic Year', ['class' => 'btn btn-info']) !!}
                    </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection