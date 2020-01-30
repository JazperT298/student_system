
<div class="modal fade" id="add-department-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">     
      <!-- Faculty Id Field -->
            

            <!-- Department Name Field -->
         
            <div class="form-group col-sm-6">
                {!! Form::label('department_code', 'Department Code:') !!}
                {!! Form::text('department_code', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-6">
                 {!! Form::label('faculty_id', 'Faculty Name:') !!}
                <select class="form-control" name="faculty_id", id="faculty_id">
                    <option value="">Select Faculty</option>
                    @foreach ($faculties as $fac => $faculty)
                    <option value="{{$faculty->faculty_id}}">{{$faculty->faculty_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-sm-12">
                {!! Form::label('department_name', 'Department Name:') !!}
                {!! Form::text('department_name', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Department Description Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('department_description', 'Department Description:') !!}
                {!! Form::textarea('department_description', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Department Status Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('department_status', 'Department Status:') !!}
                <label class="checkbox-inline">
                    {!! Form::hidden('department_status', 0) !!}
                    {!! Form::checkbox('department_status', '1', null) !!}
                </label>
            </div>


        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Save Department', ['class' => 'btn btn-success']) !!}
      </div>
    </div>
  </div>
</div>





