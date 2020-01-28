<!-- --------------Modal---------------- -->
<div class="modal fade" id="schedule-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="width:90%">
    <div class="modal-content">
    @include('adminlte-templates::common.errors')
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Class Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('update', 'schedule_id') }}" method="post"> 
            @csrf
            @method('POST')
            <!-- </div> -->
                <div class="modal-body">
                    <!-- Class Id Field -->
                    <div class="row">    
                        <input type="hidden" name='schedule_id' id="schedule_id">
                        
                        <div class="form-group col-sm-4">
                            <select class="form-control" name="class_id", id="class_id">
                                <option value="">Select Class</option>
                                @foreach ($classes as $clas)
                                <option value="{{$clas->class_id}}">{{$clas->class_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Course Id Field -->
                        <div class="form-group col-sm-4">
                            <select class="form-control" name="course_id", id="course_id">
                                <option value="">Select Course</option>
                                @foreach ($course as $cour)
                                <option value="{{$cour->course_id}}">{{$cour->course_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Level Id Field -->
                        <div class="form-group col-sm-4">
                            <select class="form-control" name="level_id", id="level_id">
                                <option value="">Select Level</option>
                                <!-- @foreach ($level as $lev)
                                <option value="{{$lev->level_id}}">{{$lev->level}}</option>
                                @endforeach -->
                            </select>
                        </div>

                        <!-- Shift Id Field -->
                        <div class="form-group col-sm-4">
                            <select class="form-control" name="shift_id", id="shift_id">
                                <option value="">Select Shift</option>
                                @foreach ($shift as $shi)
                                <option value="{{$shi->shift_id}}">{{$shi->shift}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Classroom Id Field -->
                        <div class="form-group col-sm-4">
                            <select class="form-control" name="classroom_id", id="classroom_id">
                                <option value="">Select Classroom</option>
                                @foreach ($classrooms as $classr)
                                <option value="{{$classr->classroom_id}}">{{$classr->classroom_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Batch Id Field -->
                        <div class="form-group col-sm-4">
                            <select class="form-control" name="batch_id", id="batch_id">
                                <option value="">Select Batch</option>
                                @foreach ($batch as $bat)
                                <option value="{{$bat->batch_id}}">{{$bat->batch}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Day Id Field -->
                        <div class="form-group col-sm-4">
                            <select class="form-control" name="day_id", id="day_id">
                                <option value="">Select Day</option>
                                @foreach ($day as $da)
                                <option value="{{$da->day_id}}">{{$da->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Time Id Field -->
                        <div class="form-group col-sm-4">
                            <select class="form-control" name="time_id", id="time_id">
                                <option value="">Select Time</option>
                                @foreach ($time as $taym)
                                <option value="{{$taym->time_id}}">{{$taym->time}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Semester Id Field -->
                        <div class="form-group col-sm-4">
                            <select class="form-control" name="semester_id", id="semester_id">
                                <option value="">Select Semester</option>
                                @foreach ($semester as $sem)
                                <option value="{{$sem->semester_id}}">{{$sem->semester_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Dateregistered Field -->
                        <div class="form-group col-sm-6">
                            <label>Start Date: </label>
                            <input type="text" class="form-control" name="start_date"  id="start_date" autocomplete="off">
                        </div>

                        @section('scripts')
                            <script type="text/javascript">
                                $('#start_date').datetimepicker({
                                    format: 'YYYY-MM-DD',
                                    useCurrent: false
                                });
                                $('#course_id').on('change', function(e){
                                    console.log(e);
                                        var course_id = e.target.value;

                                        $('#level_id').empty();
                                    $.get('dynamicLevel?course_id=' + course_id, function(data){
                                        console.log(data);
                                        
                                    $.each(data, function(index, lev){
                                        $('#level_id').append('<option value = "'+ lev.level_id +'">'+ lev.level+'</option>')
                                        });
                                    });
                                })

                                $(document).on('click', '#edit', function(data){
                                var id = $(this).data('id') 
                                $.get("{{route('edit')}}", {id:id}, function(data){
                                    $("#class_id").val(data.class_id);
                                    $("#course_id").val(data.course_id);
                                    $("#level_id").val(data.level_id);
                                    $("#shift_id").val(data.shift_id);
                                    $("#classroom_id").val(data.classroom_id);
                                    $("#batch_id").val(data.batch_id);
                                    $("#day_id").val(data.day_id);
                                    $("#time_id").val(data.time_id);
                                    $("#semester_id").val(data.semester_id);
                                    $("#start_date").val(data.start_date);
                                    $("#end_date").val(data.end_date);
                                    $("#schedule_id").val(data.schedule_id);
                                    $("#status").val(data.status);
                                    // alert(data.schedule_id);
                                    console.log(data);
                                })
                            })
                            </script>
                        @endsection

            
                        <div class="form-group col-sm-6">
                            <label>End Date: </label>
                            <input type="text" class="form-control" name="end_date" id="end_date" autocomplete="off">
                        </div>
                        @section('scripts')
                            <script type="text/javascript">
                                $('#end_date').datetimepicker({
                                    format: 'YYYY-MM-DD',
                                    useCurrent: false
                                });
                            </script>
                        @endsection


                        <!-- Status Field -->
                        <div class="form-group col-sm-6" name="status" id="status">
                            {!! Form::label('status', 'Status:') !!}
                            <label class="checkbox-inline">
                                {!! Form::hidden('status', 0) !!}
                                {!! Form::checkbox('status', '1', null) !!}
                            </label>
                        </div>              
                    </div>
                </div>               
    <div class="modal-footer">
        <!-- <button type="submit" class="btn btn-success btn-sm">Update Class Schedule</button> -->
        {!! Form::submit('Update Class Schedule', ['class' => 'btn btn-info']) !!}
      </div>
      {!! Form::close() !!}
      <!-- </form> -->
    </div>
  </div>
</div>



