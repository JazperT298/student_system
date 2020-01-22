<style>
    input:read-only{
        border:none;
        border-color: transparent;
    }
</style>


<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Batch</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($batches as $batche)
            <tr>
                <td>{{ $batche->batch }}</td>
                <td>
                    {!! Form::open(['route' => ['batches.destroy', $batche->batch_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                        <a data-toggle="modal" data-target="#batch-view-modal" data-batch_-id="{!! $batche->batch_id !!}" 
                        data-batch="{!! $batche->batch !!}"  data-created_at="{!! $batche->created_at !!}"  data-updated_at="{!! $batche->updated_at !!}"  
                        class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">View</i></a>

                        <a href="{{ route('batches.edit', [$batche->batch_id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit">Edit</i></a>
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
<div class="modal fade" id="batch-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-id-badge" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <input type="hidden" name="batch_id" id="batch_id">
                
                    <!-- Batch Field -->
                    <div class="form-group">
                        {!! Form::label('batch', 'Batch:') !!}
                        <input type="text" name="batch" id="batch" readonly>
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

$('#batch-view-modal').on('show.bs.modal', function(event){
    var button = $(event.relatedTarget)
    var batch = button.data('batch')
    var created_at = button.data('created_at')
    var updated_at = button.data('updated_at')
    var batch_id = button.data('batch_id')

    var model = $(this)

    model.find('.modal-title').text('VIEW BATCH INFORMATION');
    model.find('.modal-body #batch').val(batch);
    model.find('.modal-body #created_at').val(created_at);
    model.find('.modal-body #updated_at').val(updated_at);
    model.find('.modal-body #batch_id').val(batch_id);
});

</script>


@endsection
