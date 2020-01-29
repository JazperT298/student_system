@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Teacher
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($teacher, ['route' => ['teachers.update', $teacher->teacher_id], 'method' => 'patch']) !!}

                    <!-- First Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('first_name', 'First Name:') !!}
                            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Last Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('last_name', 'Last Name:') !!}
                            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Gender Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('gender', 'Gender:') !!}
                            <select class="form-control" name="gender", id="gender">
                                <option value="">Select Gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Shemale">Shemale</option>
                            </select>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Dob Field -->
                        <div class="form-group col-sm-6">
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
                        <div class="form-group col-sm-6">
                            {!! Form::label('phone', 'Phone:') !!}
                            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Address Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('address', 'Address:') !!}
                            {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Nationality Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('nationality', 'Nationality:') !!}
                            {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Passport Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('passport', 'Passport:') !!}
                            {!! Form::text('passport', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Dateregistered Field -->
                        <div class="form-group col-sm-6">
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
                        <div class="form-group col-sm-6">
                            {!! Form::label('user_id', 'User Id:') !!}
                            {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Image Field -->
                        <!-- <div class="form-group col-sm-6">
                            {!! Form::label('image', 'Image:') !!}
                            {!! Form::text('image', null, ['class' => 'form-control']) !!}
                        </div> -->
                        <div class="form-group col-sm-6">
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
                                                {!! Form::text('image', null, ['class' => 'form-control']) !!}
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

                        <!-- Status Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('status', 'Status:') !!}
                            <label class="checkbox-inline">
                                {!! Form::hidden('status', 0) !!}
                                {!! Form::checkbox('status', '1', null) !!}
                            </label>
                        </div>

                <div class="modal-footer">
                    {!! Form::submit('Update Teacher', ['class' => 'btn btn-info']) !!}
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection