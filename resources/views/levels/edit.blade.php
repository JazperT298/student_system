

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
                   <form action="{{ route('update', 'level_id') }}" method="post"> 
                  @csrf
                  @method('POST')

                        <!-- @include('levels.fields') -->
                        
                        <div class="form-group col-sm-12">
                          {!! Form::label('level', 'Level:') !!}
                          {!! Form::text('level', null, ['class' => 'form-control']) !!}
                      </div>

                        <!-- Course Id Field -->
                        <div class="form-group col-sm-12">
                              <select class="form-control" name="course_id", id="course_id">
                                  <option value="">Select Course</option>
                                  @foreach ($course as $cour)
                                  <option value="{{$cour->course_id}}">{{$cour->course_name}}</option>
                                  @endforeach
                              </select>
                          </div>

                      <!-- Description Field -->
                      <div class="form-group col-sm-12">
                          {!! Form::label('level_description', 'Level Description:') !!}
                          {!! Form::textarea('level_description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2 ]) !!}
                      </div>
                   
               </div>
               <div class="modal-footer">
                    <!-- <button type="submit" class="btn btn-success btn-sm">Update Class Schedule</button> -->
                    {!! Form::submit('Update Level', ['class' => 'btn btn-info']) !!}
                  </div>
                  {!! Form::close() !!}
                  <!-- </form> -->
           </div>
       </div>
   </div>
@endsection