@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Times</h1>
        <h1 class="pull-right">
            <a data-toggle="modal" data-target="#time-add-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" ><i class="fa fa-plus-circle" arial-hidden="true"> Add New Time</i></a>

        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('times.table')
                    {!! Form::open(['route' => 'times.store']) !!}

                    @include('times.fields')

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

