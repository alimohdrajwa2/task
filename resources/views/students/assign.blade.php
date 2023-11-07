<div class="container">
    <h1>Assign Course to {{ $student->name }}</h1>
    <form action="{{ route('students.assign.course', $student->id) }}" method="POST">
        @csrf
        <label for="course_id">Select Course:</label>
        <select name="course_id" id="course_id" required>
            @foreach($courses as $course)
                <option value="{{ $course->id }}">{{ $course->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary mt-2">Assign Course</button>
    </form>
</div>
