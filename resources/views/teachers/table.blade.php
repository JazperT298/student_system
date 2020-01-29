<div class="table-responsive">
    <table class="table" id="teachers-table">
        <thead>
            <tr>

        <th>Full Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Status</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
            <td>{{ $teacher->last_name }}{{", "}}{{ $teacher->first_name }}</td>
            <td>{{ $teacher->gender }}</td>
            <td>{{ $teacher->email }}</td>
            <td>{{ $teacher->phone }}</td>
            <td>
            @if ( $teacher->status == 1) 
            <span class="text-success">Active</span>
            @else
            <span class="text-danger">In-Active</span>
            @endif
            <td>{{ $teacher->image }}</td>
                <td>
                    {!! Form::open(['route' => ['teachers.destroy', $teacher->teacher_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                    <a data-toggle="modal" data-target="#teacher-view-modal" data-teacher_id="{!! $teacher->teacher_id !!}" 
                        data-first_name="{!! $teacher->first_name !!}" data-last_name="{!! $teacher->last_name !!}"
                        data-gender="{!! $teacher->gender !!}" data-email="{!! $teacher->email !!}"  
                        data-dob="{!! $teacher->dob !!}" data-phone="{!! $teacher->phone !!}"
                        data-address="{!! $teacher->address !!}" data-nationality="{!! $teacher->nationality !!}"  
                        data-passport="{!! $teacher->passport !!}" data-status="{!! $teacher->status !!}"
                        data-dateregistered="{!! $teacher->dateregistered !!}" data-user_id="{!! $teacher->user_id !!}"  
                        data-image="{!! $teacher->image !!}"                          
                        data-created_at="{!! $teacher->created_at !!}" data-updated_at="{!! $teacher->updated_at !!}"  

                        class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">View</i></a>

                        <a href="{{ route('teachers.edit', [$teacher->teacher_id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit">Edit</i></a>
                      
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
<div class="modal fade" id="teacher-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="width:90%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-id-badge" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row"> 
                <input type="hidden" name="teacher_id" id="teacher_id">
                
                    <!-- Created_At Field -->
                    <div class="form-group col-sm-4">
                        <label>First Name: </label>
                        <input type="text" class="form-control" name="first_name" id="first_name" readonly/>
                    </div>
                    <!-- Updated_At Field -->
                    <div class="form-group col-sm-4">
                        <label>Last Name: </label>
                        <input type="text" class="form-control" name="last_name" id="last_name" readonly/>
                    </div>     <!-- Batch Field -->
                    <div class="form-group col-sm-4">
                        <label>Gender: </label>
                        <input type="text" class="form-control" name="gender" id="gender" readonly/>
                    </div>
                    <!-- Created_At Field -->
                    <div class="form-group col-sm-4">
                        <label>Email: </label>
                        <input type="text" class="form-control" name="email" id="email" readonly/>
                    </div>
                    <!-- Updated_At Field -->
                    <div class="form-group col-sm-4">
                        <label>DOB: </label>
                        <input type="text" class="form-control" name="dob" id="dob" readonly/>
                    </div>
                         <!-- Batch Field -->
                    <div class="form-group col-sm-4">
                        <label>Phone: </label>
                        <input type="text" class="form-control" name="phone" id="phone" readonly/>
                    </div>
                    <!-- Created_At Field -->
                    <div class="form-group col-sm-4 ">
                        <label>Address: </label>
                        <input type="text" class="form-control" name="address" id="address" readonly/>
                    </div>
                    <!-- Updated_At Field -->
                    <div class="form-group col-sm-4">
                        <label>Nationality: </label>
                        <input type="text" class="form-control" name="nationality" id="nationality" readonly/>
                    </div>
                         <!-- Batch Field -->
                    <div class="form-group col-sm-4">
                        <label>Passport: </label>
                        <input type="text" class="form-control" name="passport" id="passport" readonly/>
                    </div>
                    <!-- Created_At Field -->

                    <!-- Updated_At Field -->
                    <div class="form-group col-sm-4">
                        <label>Date Registered: </label>
                        <input type="text" class="form-control" name="dateregistered" id="dateregistered" readonly/>
                    </div>
                         <!-- Batch Field -->
                    <div class="form-group col-sm-4">
                        <label>User Type: </label>
                        <input type="text" class="form-control" name="user_id" id="user_id" readonly/>
                    </div>
                    <!-- Created_At Field -->
                    <div class="form-group col-sm-4">
                        <label>Image: </label>
                        <input type="text" class="form-control" name="image" id="image" readonly/>
                    </div>
                    <!-- Updated_At Field -->
                    <div class="form-group col-sm-6">
                        <label>Created At: </label>
                        <input type="text" class="form-control" name="created_at" id="created_at" readonly/>
                    </div>
                         <!-- Batch Field -->
                    <div class="form-group col-sm-6">
                        <label>Updated At: </label>
                        <input type="text" class="form-control" name="updated_at" id="updated_at" readonly/>
                    </div>
                    <div class="form-group col-sm-6" name="status" id="status" readonly>
                        {!! Form::label('status', 'Status:') !!}
                        <label class="checkbox-inline">
                            {!! Form::hidden('status', 0) !!}
                            {!! Form::checkbox('status', '1', null) !!}
                        </label>
                    </div>
              
                </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>

$('#teacher-view-modal').on('show.bs.modal', function(event){
    var button = $(event.relatedTarget)
    var first_name = button.data('first_name')
    var last_name = button.data('last_name')
    var gender = button.data('gender')
    var email = button.data('email')

    var dob = button.data('dob')
    var phone = button.data('phone')
    var address = button.data('address')
    var nationality = button.data('nationality')

    var passport = button.data('passport')
    var status = button.data('status')
    var dateregistered = button.data('dateregistered')
    var user_id = button.data('user_id')

    var image = button.data('image')
    var created_at = button.data('created_at')
    var updated_at = button.data('updated_at')
    var teacher_id = button.data('teacher_id')

    var model = $(this)

    model.find('.modal-title').text('VIEW TEACHER INFORMATION');
    model.find('.modal-body #first_name').val(first_name);
    model.find('.modal-body #last_name').val(last_name);
    model.find('.modal-body #gender').val(gender);
    model.find('.modal-body #email').val(email);

    model.find('.modal-body #dob').val(dob);
    model.find('.modal-body #phone').val(phone);
    model.find('.modal-body #address').val(address);
    model.find('.modal-body #nationality').val(nationality);

    model.find('.modal-body #passport').val(passport);
    model.find('.modal-body #status').val(status);
    model.find('.modal-body #dateregistered').val(dateregistered);
    model.find('.modal-body #user_id').val(user_id);

    model.find('.modal-body #image').val(image);
    model.find('.modal-body #created_at').val(created_at);
    model.find('.modal-body #updated_at').val(updated_at);
    model.find('.modal-body #teacher_id').val(teacher_id);

});

</script>


@endsection