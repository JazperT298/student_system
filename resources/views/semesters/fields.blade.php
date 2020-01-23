

<div class="modal fade" id="add-semester-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Semester</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- Semester Name Field -->
            <div class="form-group ">
                {!! Form::label('semester_name', 'Semester Name:') !!}
                {!! Form::text('semester_name', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Semester Duration Field -->
            <div class="form-group ">
                {!! Form::label('semester_duration', 'Semester Duration:') !!}
                {!! Form::text('semester_duration', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Semester Code Field -->
            <div class="form-group ">
                {!! Form::label('semester_code', 'Semester Code:') !!}
                {!! Form::text('semester_code', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Semester Description Field -->
            <div class="form-group ">
                {!! Form::label('semester_description', 'Semester Description:') !!}
                {!! Form::text('semester_description', null, ['class' => 'form-control']) !!}
            </div>


        

        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Save Semester', ['class' => 'btn btn-success']) !!}
      </div>
    </div>
  </div>
</div>



