<!-- Faculty Id Field -->
<div class="form-group">
    {!! Form::label('faculty_name', 'Faculty Id:') !!}
    <p>{{ $deparments->faculty_name}}</p>
</div>

<!-- Department Name Field -->
<div class="form-group">
    {!! Form::label('department_name', 'Department Name:') !!}
    <p>{{ $deparments->department_name }}</p>
</div>

<!-- Department Code Field -->
<div class="form-group">
    {!! Form::label('department_code', 'Department Code:') !!}
    <p>{{ $deparments->department_code }}</p>
</div>

<!-- Department Description Field -->
<div class="form-group">
    {!! Form::label('department_description', 'Department Description:') !!}
    <p>{{ $deparments->department_description }}</p>
</div>

<!-- Department Status Field -->
<div class="form-group">
    {!! Form::label('department_status', 'Department Status:') !!}
    <p>{{ $deparments->department_status }}</p>
</div>

