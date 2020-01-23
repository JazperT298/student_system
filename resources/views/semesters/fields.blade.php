<!-- Semester Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester_name', 'Semester Name:') !!}
    {!! Form::text('semester_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester_duration', 'Semester Duration:') !!}
    {!! Form::text('semester_duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester_code', 'Semester Code:') !!}
    {!! Form::text('semester_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester_description', 'Semester Description:') !!}
    {!! Form::text('semester_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('semesters.index') }}" class="btn btn-default">Cancel</a>
</div>
