@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Batche
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($batche, ['route' => ['batches.update', $batche->id], 'method' => 'patch']) !!}

                        @include('batches.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection