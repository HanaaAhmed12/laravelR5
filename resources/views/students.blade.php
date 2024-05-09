<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #e6f7ff;">
@include('includes.nav')
<div class="container">
  <h2 style="color: #004d99;">Students Data</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th style="background-color: #004d99; color: #ffffff;">StudentName</th>
        <th style="background-color: #004d99; color: #ffffff;">Age</th>
        <th style="background-color: #004d99; color: #ffffff;">Phone</th>
        <th style="background-color: #004d99; color: #ffffff;">Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
      <tr>
        <td>{{ $student->StudentName }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->email }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
