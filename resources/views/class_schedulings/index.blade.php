@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Class Schedules</h1>
        <h1 class="pull-right">
            <a data-toggle="modal" data-target="#schedule-add-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" ><i class="fa fa-plus-circle" arial-hidden="true"> Add New Schedule</i></a>

        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">  
                    @include('class_schedulings.table')
                    @include('class_schedulings.edit')
                    @include('class_schedulings.show_fields')
                    {!! Form::open(['route' => 'classSchedulings.store']) !!}

                    @include('class_schedulings.fields')

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

