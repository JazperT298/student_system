<!-- Faculty Name Field -->
<div class="form-group">
    {!! Form::label('faculty_name', 'Faculty Name:') !!}
    <p>{{ $faculty->faculty_name }}</p>
</div>

<!-- Faculty Code Field -->
<div class="form-group">
    {!! Form::label('faculty_code', 'Faculty Code:') !!}
    <p>{{ $faculty->faculty_code }}</p>
</div>

<!-- Faculty Description Field -->
<div class="form-group">
    {!! Form::label('faculty_description', 'Faculty Description:') !!}
    <p>{{ $faculty->faculty_description }}</p>
</div>

<!-- Faculty Status Field -->
<div class="form-group">
    {!! Form::label('faculty_status', 'Faculty Status:') !!}
    @if ( $faculty->faculty_status == 1) 
    <p>Active</p>
    @else
    <p>In-Active</p>
    @endif
</div>

