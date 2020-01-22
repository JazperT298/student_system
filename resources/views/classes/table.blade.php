<style>
    input:read-only{
        border:none;
        border-color: transparent;
    }
</style>


<div class="table-responsive">
    <table class="table" id="classes-table">
        <thead>
            <tr>
                <th>Class Name</th>
        <th>Class Code</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classes as $classes)
            <tr>
                <td>{{ $classes->class_name }}</td>
            <td>{{ $classes->class_code }}</td>
                <td>
                    {!! Form::open(['route' => ['classes.destroy', $classes->class_id ], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                        <a data-toggle="modal" data-target="#classes-view-modal" data-batch_-id="{!! $classes->class_id !!}" 
                        data-class_name="{!! $classes->class_name !!}"  data-class_code="{!! $classes->class_code !!}" data-created_at="{!! $classes->created_at !!}"  data-updated_at="{!! $classes->updated_at !!}"  
                        class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">View</i></a>

                        <a href="{{ route('classes.edit', [$classes->class_id ]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit">Edit</i></a>
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
<div class="modal fade" id="classes-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-id-badge" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <input type="hidden" name="classes_id" id="classes_id">
                
                    <!-- Class Name Field -->
                    <div class="form-group">
                        {!! Form::label('class_name', 'Class Name:') !!}
                        <input type="text" name="class_name" id="class_name" readonly>
                    </div>
                    <!-- Class Code Field -->
                    <div class="form-group">
                        {!! Form::label('class_code', 'Class Code:') !!}
                        <input type="text" name="class_code" id="class_code" readonly>
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

$('#classes-view-modal').on('show.bs.modal', function(event){
    var button = $(event.relatedTarget)
    var class_name = button.data('class_name')
    var class_code = button.data('class_code')
    var created_at = button.data('created_at')
    var updated_at = button.data('updated_at')
    var class_id = button.data('class_id')

    var model = $(this)

    model.find('.modal-title').text('VIEW CLASSES INFORMATION');
    model.find('.modal-body #class_name').val(class_name);
    model.find('.modal-body #class_code').val(class_code);
    model.find('.modal-body #created_at').val(created_at);
    model.find('.modal-body #updated_at').val(updated_at);
    model.find('.modal-body #class_id').val(class_id);
});

</script>


@endsection
