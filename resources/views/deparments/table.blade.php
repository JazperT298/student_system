<div class="table-responsive">
    <table class="table" id="deparments-table">
        <thead>
            <tr>
                <th>Faculty Name</th>
        <th>Department Name</th>
        <th>Department Code</th>
        <th>Department Description</th>
        <th>Department Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($deparmentss as $deparments)
            <tr>
                <td>{{ $deparments->faculty_name }}</td>
            <td>{{ $deparments->department_name }}</td>
            <td>{{ $deparments->department_code }}</td>
            <td>{{ $deparments->department_description }}</td>
            <td>
            @if ( $deparments->department_status == 1) 
            <span class="text-success">Active</span>
            @else
            <span class="text-danger">In-Active</span>
            @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['deparments.destroy', $deparments->department_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('deparments.show', [$deparments->department_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">View</i></a>
                        <a href="{{ route('deparments.edit', [$deparments->department_id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit">Edit</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
