<!-- --------------Modal---------------- -->
<div class="modal fade left" id="time-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Time</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                     <!-- Day Field -->
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon">Time</span>
                        {!! Form::text('time', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                {!! Form::submit('Create Time', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
    </div>
</div>
