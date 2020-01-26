<div class="modal fade" id="add-classes-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Classes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Class Name Field -->
        <div class="form-group col-sm-6">
            <div class="input-group">
                <span class="input-group-addon">Class Name:</span>
                {!! Form::text('class_name', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <!-- Class Code Field -->
        <div class="form-group col-sm-6">
            <div class="input-group">
                <span class="input-group-addon">Class Code:</span>
                {!! Form::text('class_code', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <!-- <div class="input-group col-sm-12">
                        <span class="input-group-addon">Batch Year</span>
                        {!! Form::text('batch', null, ['class' => 'form-control']) !!}
                    </div> -->
      </div>

   <div class="modal-footer">
     <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
     {!! Form::submit('Save Classes', ['class' => 'btn btn-success']) !!}
   </div>
  </div>
 </div>
</div>

