<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Batch</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($batches as $batche)
            <tr>
                <td>{{ $batche->batch }}</td>
                <td>
                    {!! Form::open(['route' => ['batches.destroy', $batche->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('batches.show', [$batche->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('batches.edit', [$batche->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
