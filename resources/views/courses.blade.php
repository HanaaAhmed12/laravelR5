<!DOCTYPE html>
<html>
<head>
    <title>Student Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #0056b3;
            text-align: center;
            padding: 20px;
            margin: 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px auto;
            max-width: 600px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        li {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        li:last-child {
            border-bottom: none;
        }

        li:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>{{ $student->StudentName }}'s Courses</h1>
    <ul>

        @foreach($courses as $course)
        <li>{{ $course->title}}</li>
    @endforeach

    </ul>

</body>
</html>
