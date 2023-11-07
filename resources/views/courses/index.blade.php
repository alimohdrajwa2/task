<div class="container">
    <h1>List of Courses</h1>
    <ul>
        @foreach($courses as $course)
            <li>
                {{ $course->name }}
                <a href="{{ route('courses.students', $course->id) }}" class="btn btn-primary btn-sm">View Students</a> or
                <a href="{{ route('courses.assign', $course->id) }}" class="btn btn-success btn-sm">Assign a Student</a>
            </li>
        @endforeach
    </ul>
</div>
