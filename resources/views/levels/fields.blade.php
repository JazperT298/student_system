
<div class="modal fade" id="level-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Level</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- Level Field -->
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Save Level', ['class' => 'btn btn-success']) !!}
      </div>
    </div>
  </div>
</div>


