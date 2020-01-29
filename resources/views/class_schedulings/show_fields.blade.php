


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
                        <input type="hidden" name='schedule_id' id="schedule_id">
                        
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
                        
                    </div>
                </div>               
    <div class="modal-footer">
        <button type="submit" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
        <!-- {!! Form::submit('', ['class' => 'btn btn-info']) !!} -->
      </div>      <!-- </form> -->
    </div>
  </div>
</div>




