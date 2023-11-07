<div class="container">
    <h1>List of Students</h1>
    <ul>
        @foreach($students as $student)
            <li>
                {{ $student->name }}
                <a href="{{ route('students.courses', $student->id) }}" class="btn btn-primary btn-sm">Display Courses</a> or
                <a href="{{ route('students.assign', $student->id) }}" class="btn btn-success btn-sm">Assign a Course</a>
            </li>
        @endforeach
    </ul>
</div>
