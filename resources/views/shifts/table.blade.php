<div class="table-responsive">
    <table class="table" id="shifts-table">
        <thead>
            <tr>
                <th>Shift</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shifts as $shift)
            <tr>
                <td>{{ $shift->shift }}</td>
                <td>
                    {!! Form::open(['route' => ['shifts.destroy', $shift->shift_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                        <a data-toggle="modal" data-target="#shift-view-modal" data-shift_id="{!! $shift->shift_id !!}" 
                        data-shift="{!! $shift->shift !!}"  data-created_at="{!! $shift->created_at !!}"  data-updated_at="{!! $shift->updated_at !!}"  
                        class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">View</i></a>

                        <a href="{{ route('shifts.edit', [$shift->shift_id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit">Edit</i></a>
                      
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- --------------Modal---------------- -->
<div class="modal fade" id="shift-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-id-badge" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <input type="hidden" name="shift_id" id="shift_id">
                  <!-- Academic Field -->
                    <div class="form-group">
                        {!! Form::label('shift_id', 'Shift Id:') !!}
                        <input type="text" name="shift_id" id="shift_id" readonly>
                    </div>
                    <!-- Academic Field -->
                    <div class="form-group">
                        {!! Form::label('shift', 'Shift:') !!}
                        <input type="text" name="shift" id="shift" readonly>
                    </div>
                    <!-- Created_At Field -->
                    <div class="form-group">
                        {!! Form::label('created_at', 'Created_At:') !!}
                        <input type="text" name="created_at" id="created_at" readonly>
                    </div>
                    <!-- Updated_At Field -->
                    <div class="form-group">
                        {!! Form::label('updated_at', 'Updated_At:') !!}
                        <input type="text" name="updated_at" id="updated_at" readonly>
                    </div>
                </div>

            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

@section('scripts')
<script>

$('#shift-view-modal').on('show.bs.modal', function(event){
    var button = $(event.relatedTarget)
    var shift = button.data('shift')
    var created_at = button.data('created_at')
    var updated_at = button.data('updated_at')
    var shift_id = button.data('shift_id')

    var model = $(this)

    model.find('.modal-title').text('VIEW SHIFT INFORMATION');
    model.find('.modal-body #shift').val(shift);
    model.find('.modal-body #created_at').val(created_at);
    model.find('.modal-body #updated_at').val(updated_at);
    model.find('.modal-body #shift_id').val(shift_id);
});

</script>


@endsection




