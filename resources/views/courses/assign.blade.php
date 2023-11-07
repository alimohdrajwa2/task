<div class="container">
    <h1>Assign Student to {{ $course->name }}</h1>
    <form action="{{ route('courses.assign.student', $course->id) }}" method="POST">
        @csrf
        <label for="student_id">Select Student:</label>
        <select name="student_id" id="student_id" required>
            @foreach($students as $student)
                <option value="{{ $student->id }}">{{ $student->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary mt-2">Assign Student</button>
    </form>
</div>
