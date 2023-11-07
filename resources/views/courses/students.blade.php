<div class="container">
    <h1>Students of {{ $course->name }}</h1>
    <ul>
        @foreach($students as $student)
            <li>{{ $student->name }}</li>
        @endforeach
    </ul>
</div>
