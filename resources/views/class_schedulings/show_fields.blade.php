<!-- --------------Modal---------------- -->
<div class="modal fade" id="schedule-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="width:90%">
    <div class="modal-content">
    @include('adminlte-templates::common.errors')
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Class Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- <form action="{{ route('update', 'schedule_id') }}" method="post"> 
            @csrf
            @method('POST') -->
            <!-- </div> -->
                <div class="modal-body">
                    <!-- Class Id Field -->
                    <div class="row">    
                        <input type="text" name='schedule_id' id="schedule_id">
                        
                        <div class="form-group col-sm-4">
                            <label>Class: </label>
                            <input type="text" class="form-control" name="class_id" id="class_id" readonly/> 
                        </div>

                        <!-- Course Id Field -->
                        <div class="form-group col-sm-4">
                            <label>Course : </label>
                            <input type="text" class="form-control" name="course_id" id="course_id" readonly/> 
                        </div>

                        <!-- Level Id Field -->
                        <div class="form-group col-sm-4">
                            <label>Level: </label>
                            <input type="text" class="form-control" name="level_id" id="level_id" readonly/> 
                        </div>

                        <!-- Shift Id Field -->
                        <div class="form-group col-sm-4">
                            <label>Shift: </label>
                            <input type="text" class="form-control" name="shift_id" id="shift_id" readonly/> 
                        </div>

                        <!-- Classroom Id Field -->
                        <div class="form-group col-sm-4">
                            <label>Classroom: </label>
                            <input type="text" class="form-control" name="classroom_id" id="classroom_id" readonly/> 
                        </div>

                        <!-- Batch Id Field -->
                        <div class="form-group col-sm-4">
                            <label>Batch: </label>
                            <input type="text" class="form-control" name="batch_id" id="batch_id" readonly/>
                        </div>

                        <!-- Day Id Field -->
                        <div class="form-group col-sm-4">
                        <label>Day: </label>
                            <input type="text" class="form-control" name="day_id" id="day_id" readonly/>
                        </div>

                        <!-- Time Id Field -->
                        <div class="form-group col-sm-4">
                        <label>Time: </label>
                            <input type="text" class="form-control" name="time_id" id="time_id" readonly/>
                        </div>

                        <!-- Semester Id Field -->
                        <div class="form-group col-sm-4">
                        <label>Semester: </label>
                            <input type="text" class="form-control" name="semester_id" id="semester_id" readonly/>
                        </div>

                        <!-- Dateregistered Field -->
                        <div class="form-group col-sm-6">
                            <label>Start Date: </label>
                            <input type="text" class="form-control" name="start_date"  id="start_date" autocomplete="off" readonly>
                        </div>

                        
            
                        <div class="form-group col-sm-6">
                            <label>End Date: </label>
                            <input type="text" class="form-control" name="end_date" id="end_date" autocomplete="off" readonly>
                        </div>

                        <!-- Status Field -->
                        <div class="form-group col-sm-6" name="status" id="status" readonly>
                            {!! Form::label('status', 'Status:') !!}
                            <label class="checkbox-inline">
                                {!! Form::hidden('status', 0) !!}
                                {!! Form::checkbox('status', '1', null) !!}
                            </label>
                        </div>    
                        @section('scripts')
                            <script type="text/javascript">
                                $('#schedule-view-modal').on('show.bs.modal', function(event){
                                    var button = $(event.relatedTarget)
                                    var class_id = button.data('class_id')
                                    var course_id = button.data('course_id')
                                    var level_id = button.data('level_id')
                                    var shift_id = button.data('shift_id')
                                    var classroom_id = button.data('classroom_id')
                                    var batch_id = button.data('batch_id')
                                    var day_id = button.data('day_id')
                                    var time_id = button.data('time_id')
                                    var semester_id = button.data('semester_id')
                                    var start_date = button.data('start_date')
                                    var end_date = button.data('end_date')
                                    var status = button.data('status')
                                    var schedule_id = button.data('schedule_id')
                                    console.log(schedule_id);
                                    alert(class_id);
                                    var modal = $(this)

                                    modal.find('.modal-title').text('VIEW CLASS SCHEDULE');
                                    modal.find('.modal-body #class_id').val(class_id);
                                    modal.find('.modal-body #course_id').val(course_id);
                                    modal.find('.modal-body #level_id').val(level_id);
                                    modal.find('.modal-body #shift_id').val(shift_id);
                                    modal.find('.modal-body #classroom_id').val(classroom_id);
                                    modal.find('.modal-body #batch_id').val(batch_id);
                                    modal.find('.modal-body #day_id').val(day_id);
                                    modal.find('.modal-body #time_id').val(time_id);
                                    modal.find('.modal-body #semester_id').val(semester_id);
                                    modal.find('.modal-body #start_date').val(start_date);
                                    modal.find('.modal-body #end_date').val(end_date);
                                    modal.find('.modal-body #status').val(status);
                                    modal.find('.modal-body #schedule_id').val(schedule_id);

                                });
                            </script>
                        @endsection          
                    </div>
                </div>               
    <div class="modal-footer">
        <button type="submit" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
        <!-- {!! Form::submit('', ['class' => 'btn btn-info']) !!} -->
      </div>      <!-- </form> -->
    </div>
  </div>
</div>










