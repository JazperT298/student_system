<!-- @if(Auth::user()->role < 2) -->
<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>General</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>

<ul class="treeview-menu">



<li class="{{ Request::is('classes*') ? 'active' : '' }}">
    <a href="{{ route('classes.index') }}"><i class="fa fa-edit"></i><span>Classes</span></a>
</li>

<li class="{{ Request::is('classrooms*') ? 'active' : '' }}">
    <a href="{{ route('classrooms.index') }}"><i class="fa fa-edit"></i><span>Classrooms</span></a>
</li>

<li class="{{ Request::is('levels*') ? 'active' : '' }}">
    <a href="{{ route('levels.index') }}"><i class="fa fa-edit"></i><span>Levels</span></a>
</li>

<li class="{{ Request::is('batches*') ? 'active' : '' }}">
    <a href="{{ route('batches.index') }}"><i class="fa fa-edit"></i><span>Batches</span></a>
</li>

<li class="{{ Request::is('shifts*') ? 'active' : '' }}">
    <a href="{{ route('shifts.index') }}"><i class="fa fa-edit"></i><span>Shifts</span></a>
</li>

<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Courses</span></a>
</li>


<li class="{{ Request::is('times*') ? 'active' : '' }}">
    <a href="{{ route('times.index') }}"><i class="fa fa-edit"></i><span>Times</span></a>
</li>

<li class="{{ Request::is('academics*') ? 'active' : '' }}">
    <a href="{{ route('academics.index') }}"><i class="fa fa-edit"></i><span>Academics</span></a>
</li>

<li class="{{ Request::is('days*') ? 'active' : '' }}">
    <a href="{{ route('days.index') }}"><i class="fa fa-edit"></i><span>Days</span></a>
</li>

<li class="{{ Request::is('semesters*') ? 'active' : '' }}">
    <a href="{{ route('semesters.index') }}"><i class="fa fa-edit"></i><span>Semesters</span></a>
</li>

</ul>
</li>


<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>Schedule</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
<ul class="treeview-menu">

<li class="{{ Request::is('classAssignings*') ? 'active' : '' }}">
    <a href="{{ route('classAssignings.index') }}"><i class="fa fa-edit"></i><span>Class Assignings</span></a>
</li>

<li class="{{ Request::is('classSchedulings*') ? 'active' : '' }}">
    <a href="{{ route('classSchedulings.index') }}"><i class="fa fa-edit"></i><span>Class Schedulings</span></a>
</li>

</ul>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>Faculty</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
<ul class="treeview-menu">

<li class="{{ Request::is('faculties*') ? 'active' : '' }}">
    <a href="{{ route('faculties.index') }}"><i class="fa fa-edit"></i><span>Faculties</span></a>
</li>

<li class="{{ Request::is('deparments*') ? 'active' : '' }}">
    <a href="{{ route('deparments.index') }}"><i class="fa fa-edit"></i><span>Deparments</span></a>
</li>

</ul>
</li>

<!-- @endif -->

<li class="{{ Request::is('admissions*') ? 'active' : '' }}">
    <a href="{{ route('admissions.index') }}"><i class="fa fa-user"></i><span>Admissions</span></a>
</li>

<li class="{{ Request::is('teachers*') ? 'active' : '' }}">
    <a href="{{ route('teachers.index') }}"><i class="fa fa-user-circle"></i><span>Teachers</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Users</span></a>
</li>

<!-- @if(Auth::user()->role < 4) -->
<li class="{{ Request::is('attendances*') ? 'active' : '' }}">
    <a href="{{ route('attendances.index') }}"><i class="fa fa-calendar"></i><span>Attendances</span></a>
</li>
<!-- @endif -->

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
<!-- @if(Auth::user()->role < 4) -->
<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{{ route('transactions.index') }}"><i class="fa fa-money"></i><span>Transactions</span></a>
</li>
<!-- @endif -->

