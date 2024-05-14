<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Student</title>
    <style>
      body {
        background-color: #f0f8ff;
        font-family: Arial, sans-serif;
        color: #333;
      }
      h2 {
        color: #00008b;
      }
      form {
        background-color: #add8e6;
        padding: 20px;
        border-radius: 10px;
        width: 300px;
        margin: 0 auto;
      }
      label {
        color: #000080;
      }
      input[type="text"],
      input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #000080;
        border-radius: 5px;
        box-sizing: border-box;
      }
      input[type="submit"] {
        background-color: #000080;
        color: #fff;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #4169e1;
      }
    </style>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse" >
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Students</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ route('addStudent') }}">Add</a></li>
            <li class=""><a href="{{ route('students') }}">Student</a></li>
            {{-- <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li> --}}
          </ul>
        </div>
      </nav>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1 style="text-align: center">Edit Student</h1>
        <form action="{{ route('updateStudents' , $student->id) }}" method="POST">
          @csrf
          @method('put')
          <label for="StudentName">Student Name:</label><br />
          <input type="text" id="StudentName" name="StudentName" value="{{ $student->StudentName }}" /><br />
          <label for="age">Age:</label><br />
          <input type="text" id="age" name="age" value="{{ $student->age }}" /><br /><br />
          <label for="phone">Phone Number:</label><br />
          <input type="text" id="phone" name="phone" value="{{ $student->phone }}" /><br /><br />
          <label for="email">Email:</label><br />
          <input type="text" id="email" name="email" value="{{ $student->email }}" /><br /><br />
          <input type="submit" value="Submit" />
        </form>
      </div>
    </div>
  </body>
</html>

