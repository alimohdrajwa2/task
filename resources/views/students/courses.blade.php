<div class="container">
    <h1>Courses of {{ $student->name }}</h1>
    <ul>
        @foreach($courses as $course)
            <li>{{ $course->name }}</li>
        @endforeach
    </ul>
</div>
