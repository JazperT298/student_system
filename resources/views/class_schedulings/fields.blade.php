<!-- --------------Modal---------------- -->
<div class="modal fade" id="schedule-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="width:90%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <!-- </div> -->
                <div class="modal-body">
                    <!-- Class Id Field -->
                    <div class="row">     
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="class_id", id="class_id">
                                <option value="">Select Class</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <!-- Course Id Field -->
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="course_id", id="course_id">
                                <option value="">Select Course</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <!-- Level Id Field -->
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="level_id", id="level_id">
                                <option value="">Select Level</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <!-- Shift Id Field -->
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="shift_id", id="shift_id">
                                <option value="">Select Shift</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <!-- Classroom Id Field -->
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="classroom_id", id="classroom_id">
                                <option value="">Select Classroom</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <!-- Batch Id Field -->
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="batch_id", id="batch_id">
                                <option value="">Select Batch</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <!-- Day Id Field -->
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="day_id", id="day_id">
                                <option value="">Select Day</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <!-- Time Id Field -->
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="time_id", id="time_id">
                                <option value="">Select Time</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <!-- Semester Id Field -->
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="semester_id", id="semester_id">
                                <option value="">Select Semester</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <!-- Start Date Field -->
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="start_date", id="start_date">
                                <option value="">Select Start Date</option>
                                <option value=""></option>
                            </select>
                        </div>

                        @section('scripts')
                            <script type="text/javascript">
                                $('#start_date').datetimepicker({
                                    format: 'YYYY-MM-DD',
                                    useCurrent: false
                                })
                            </script>
                        @endsection

                        <!-- End Date Field -->
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="end_date", id="end_date">
                                <option value="">Select End Date</option>
                                <option value=""></option>
                            </select>
                        </div> 
                        @section('scripts')
                            <script type="text/javascript">
                                $('#end_date').datetimepicker({
                                    format: 'YYYY-MM-DD',
                                    useCurrent: false
                                })
                            </script>
                        @endsection

                        <!-- Status Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('status', 'Status:') !!}
                            <label class="checkbox-inline">
                                {!! Form::hidden('status', 0) !!}
                                {!! Form::checkbox('status', '1', null) !!}
                            </label>
                        </div>              
                    </div>
                </div>               
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Save Schedule', ['class' => 'btn btn-success']) !!}
      </div>
    </div>
  </div>
</div>


