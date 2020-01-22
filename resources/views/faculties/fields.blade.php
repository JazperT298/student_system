
<div class="modal fade" id="add-faculty-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Faculty</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- Classroom Name Field -->
            <div class="form-group ">
            {!! Form::label('faculty_name', 'Faculty Name:') !!}
            {!! Form::text('faculty_name', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Classroom Code Field -->
            <div class="form-group">
                {!! Form::label('faculty_code', 'Faculty Code:') !!}
                {!! Form::number('faculty_code', null, ['class' => 'form-control']) !!}
            </div>    
            
            <!-- Classroom Description Field -->
            <div class="form-group">
                {!! Form::label('faculty_description', 'Faculty Description:') !!}
                {!! Form::textarea('faculty_description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2]) !!}
            </div>

            <!-- Classroom Status Field -->
            <div class="form-group">
                {!! Form::label('faculty_status', 'Faculty Status:') !!}
                <label class="checkbox-inline">
                    {!! Form::hidden('faculty_status', 0) !!}
                    {!! Form::checkbox('faculty_status', '1', null) !!}
                </label>
            </div>

        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Save Faculty', ['class' => 'btn btn-success']) !!}
      </div>
    </div>
  </div>
</div>




