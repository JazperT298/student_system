<!-- --------------Modal---------------- -->
<div class="modal fade" id="teacher-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="width:90%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Teacher</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <!-- </div> -->
                <div class="modal-body">

<!-- First Name Field -->
<div class="form-group col-sm-4">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-4">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-4">
    {!! Form::label('gender', 'Gender:') !!}
    <select class="form-control" name="gender", id="gender">
        <option value="">Select Gender</option>
        <option value="Female">Female</option>
        <option value="Male">Male</option>
        <option value="Shemale">Shemale</option>
    </select>
</div>

<!-- Email Field -->
<div class="form-group col-sm-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-4">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::date('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#dob').datepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Phone Field -->
<div class="form-group col-sm-4">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Passport Field -->
<div class="form-group col-sm-4">
    {!! Form::label('passport', 'Passport:') !!}
    {!! Form::text('passport', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateregistered Field -->
<div class="form-group col-sm-4">
    {!! Form::label('dateregistered', 'Date Registered:') !!}
    {!! Form::date('dateregistered', null, ['class' => 'form-control','id'=>'dateregistered']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#dateregistered').datepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- User Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<!-- <div class="form-group col-sm-4">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Status Field -->
<div class="form-group col-sm-4">
    {!! Form::label('status', 'Status:') !!}
    <select class="form-control" name="status", id="status">
        <option value="">Select Status</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
        <option value="widow">Widow</option>
        <option value="separated">Separated</option>
        <option value="broken hearted">Broken Hearted</option>
        <option value="hot father">Hot Father</option>
        <option value="single father">Single Father</option>
        <option value="sugar mommy">Sugar Daddy</option>
        <option value="hot momma">Hot Momma</option>
        <option value="single mother">Single Mother</option>
        <option value="sugar daddy">Sugar Mommy</option>
    </select>
</div>

<div class="form-group col-sm-4">
    <!-- <div class="form-group col-sm-4"> -->
        <table>
            <thead>
                <tr class="info">
                </tr>
            </thead>
            <tbody>
                <tr >
                    <td class="image">
                        <!-- {!! Html::image('student_image/profile.jpg', null, ['class'=>'student-image', 'id'=>'showImage']) !!} -->
                        {!! Form::label('image', 'Image:') !!}
                        <input type="file" name="image" id="image" accept="image/x-png,image/png,image/jpg,image/jpeg">
                    </td>
                </tr>
                <tr>
                    <td style="test-align:center;background:#ddd;">
                        <input type="button" name="browse_file" id="browse_file" class="form-control text-capitalize btn-browse" class="btn btn-outline-danger" value="Choose">
                    </td>
                </tr>
            </tbody>
        </table>
    <!-- </div> -->
</div>

</div>               
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Save Schedule', ['class' => 'btn btn-success']) !!}
      </div>
    </div>
  </div>
</div>