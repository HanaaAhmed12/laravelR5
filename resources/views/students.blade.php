
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
@include('includes.nav2')
<div class="container">
  <h2 style="color: #e61102;"><b>Students Data</b></h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th style="background-color: #f70303; color: #ffffff;">StudentName</th>
        <th style="background-color: #f70303; color: #ffffff;">Age</th>
        <th style="background-color: #f70303; color: #ffffff;">Phone</th>
        <th style="background-color: #f70303; color: #ffffff;">Email</th>
        <th style="background-color: #f70303; color: #ffffff;">Edit</th>
        <th style="background-color: #f70303; color: #ffffff;">Show</th>
        <th style="background-color: #f70303; color: #ffffff;">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
      <tr>
        <td>{{ $student->StudentName }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->email }}</td>
        <td><a href="{{ route('editStudents' , $student->id)  }}">Edit</a></td>
        <td><a href="{{ route('showStudents' , $student->id)  }}">Show</a></td>
        <td>
            <form action="{{ route('delStudents') }}" method="post">
            @csrf
            @method('Delete')
            <input type="hidden" name="id" value="{{ $student->id }}">
            <input type="submit" value="Delete"  onclick="return confirm('Are you sure you want to Delete this user?')">
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<script>
    function confirmDelete(studentId) {
        if (confirm('Are you sure you want to delete this student?')) {
            document.getElementById('deleteForm' + studentId).submit();
            return true;
        }
        return false;
    }
</script>
</body>
</html>
