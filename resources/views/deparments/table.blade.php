<div class="table-responsive">
    <table class="table" id="deparments-table">
        <thead>
            <tr>
                <th>Faculty Id</th>
        <th>Department Name</th>
        <th>Department Code</th>
        <th>Department Description</th>
        <th>Department Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($deparments as $deparments)
            <tr>
                <td>{{ $deparments->faculty_id }}</td>
            <td>{{ $deparments->department_name }}</td>
            <td>{{ $deparments->department_code }}</td>
            <td>{{ $deparments->department_description }}</td>
            <td>{{ $deparments->department_status }}</td>
                <td>
                    {!! Form::open(['route' => ['deparments.destroy', $deparments->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('deparments.show', [$deparments->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('deparments.edit', [$deparments->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
