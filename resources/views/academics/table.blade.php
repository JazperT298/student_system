<div class="table-responsive">
    <table class="table" id="academics-table">
        <thead>
            <tr>
                <th>Academic Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($academics as $academic)
            <tr>
                <td>{{ $academic->academic_year }}</td>
                <td>
                    {!! Form::open(['route' => ['academics.destroy', $academic->academic_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a data-toggle="modal" data-target="#academic-view-modal" data-academic_id="{!! $academic->academic_id !!}" 
                        data-academic_year="{!! $academic->academic_year !!}"  data-created_at="{!! $academic->created_at !!}"  data-updated_at="{!! $academic->updated_at !!}"  
                        class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">View</i></a>

                        <a href="{{ route('academics.edit', [$academic->academic_id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit">Edit</i></a>
                      
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
<div class="modal fade" id="academic-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-id-badge" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <input type="hidden" name="academic_id" id="academic_id">
                  <!-- Academic Field -->
                    <div class="form-group">
                        {!! Form::label('academic_id', 'Academic Id:') !!}
                        <input type="text" name="academic_id" id="academic_id" readonly>
                    </div>
                    <!-- Academic Field -->
                    <div class="form-group">
                        {!! Form::label('academic_year', 'Academic Year:') !!}
                        <input type="text" name="academic_year" id="academic_year" readonly>
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

$('#academic-view-modal').on('show.bs.modal', function(event){
    var button = $(event.relatedTarget)
    var academic_year = button.data('academic_year')
    var created_at = button.data('created_at')
    var updated_at = button.data('updated_at')
    var academic_id = button.data('academic_id')

    var model = $(this)

    model.find('.modal-title').text('VIEW ACADEMIC INFORMATION');
    model.find('.modal-body #academic_year').val(academic_year);
    model.find('.modal-body #created_at').val(created_at);
    model.find('.modal-body #updated_at').val(updated_at);
    model.find('.modal-body #academic_id').val(academic_id);
});

</script>


@endsection







