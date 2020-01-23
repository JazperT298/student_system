<div class="table-responsive">
    <table class="table" id="classrooms-table">
        <thead>
            <tr>
                <th>Classroom Name</th>
        <th>Classroom Code</th>
        <th>Classroom Description</th>
        <th>Classroom Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classrooms as $classrooms)
            <tr>
                <td>{{ $classrooms->classroom_name }}</td>
            <td>{{ $classrooms->classroom_code }}</td>
            <td>{{ $classrooms->classroom_description }}</td>
            <td>
            @if ( $classrooms->classroom_status == 1) 
            <span class="text-success">Active</span>
            @else
            <span class="text-danger">In-Active</span>
            @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['classrooms.destroy', $classrooms->classroom_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                    <a href="{{ route('classrooms.show', [$classrooms->classroom_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">View </i></a>
                        <a href="{{ route('classrooms.edit', [$classrooms->classroom_id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit">Edit </i></a>
                       {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
