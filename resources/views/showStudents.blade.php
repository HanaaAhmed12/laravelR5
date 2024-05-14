<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$student->StudentName}}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h1, h2 {
            color: #333;
        }

        hr {
            border: 1px solid #ccc;
            margin: 10px 0;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1><strong>Student : </strong>{{$student->StudentName}}</h1>
<hr>
<h2><strong>Age : </strong>{{$student->age}}</h2>
<hr>
<h2><strong>Phone : </strong>{{$student->phone}}</h2>
<hr>
<h2><strong>Email : </strong>{{$student->email}}</h2>
</body>
</html>
