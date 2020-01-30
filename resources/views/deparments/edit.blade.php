@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Deparments
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($deparments, ['route' => ['deparments.update', $deparments->department_id], 'method' => 'patch']) !!}

                        @include('deparments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection