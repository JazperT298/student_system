
<div class="modal fade" id="add-shift-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Shift</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <!-- Academic Year Field -->
            <div class="input-group col-sm-12">
                <span class="input-group-addon">Shift</span>
                {!! Form::text('shift', null, ['class' => 'form-control']) !!}
            </div>

        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Create Shifts', ['class' => 'btn btn-success']) !!}
      </div>
    </div>
  </div>
</div>






