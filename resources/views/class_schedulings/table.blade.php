<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course</th>
        <th>Class</th>
        <th>Level</th>
        <th>Shift</th>
        <th>Classroom</th>
        <th>Batch</th>
        <th>Day</th>
        <th>Time</th>
        <th>Semester</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classscheduling as $classScheduling)
            <tr>       
                <td>{{ $classScheduling->course_name }}</td>
                <td>{{ $classScheduling->class_name }}</td>
                <td>{{ $classScheduling->level }}</td>
                <td>{{ $classScheduling->shift }}</td>
                <td>{{ $classScheduling->classroom_name }}</td>
                <td>{{ $classScheduling->batch }}</td>
                <td>{{ $classScheduling->name }}</td>
                <td>{{ $classScheduling->time }}</td>
                <td>{{ $classScheduling->semester_name }}</td>
                <td>{{ $classScheduling->start_date }}</td>
                <td>{{ $classScheduling->end_date }}</td>
                <td>
                @if ( $classScheduling->status == 1) 
                <span class="text-success">Active</span>
                @else
                <span class="text-danger">In-Active</span>
                @endif
                </td>
                <td>
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classScheduling->schedule_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
                        <a href="{{ route('classSchedulings.show', [$classScheduling->schedule_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">View</i></a>
                        
                        <a data-toggle="modal" data-target="#schedule-edit-modal" id="edit" data-id="{{ $classScheduling->schedule_id }}"  class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit">Edit</i></a>
                        
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>                       
            </tr>
            @endforeach
     
        </tbody>
    </table>
</div>
