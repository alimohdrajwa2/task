<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Example</title>
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add some custom styles for the sidebar */
        #sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f8f9fa;
            padding-top: 20px;
        }

        #sidebar a {
            padding: 10px 15px;
            font-size: 18px;
            text-decoration: none;
            color: #000;
        }

        #sidebar a:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div id="sidebar">
        <h3>Task 1</h3>
        <a href="{{route('students.index')}}">List Students</a>
        <br>
        <a href="{{route('courses.index')}}">List Courses</a>
        <br>
        <h3>Task 2</h3>
        <a href="{{route('task2.index')}}">Task 2</a>
    </div>






    <!-- Bootstrap JS Scripts (for dropdowns, modals, etc.) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
