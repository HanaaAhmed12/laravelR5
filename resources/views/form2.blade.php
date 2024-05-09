<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add client</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Clients</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ route('addClient') }}">Add</a></li>
            <li class=""><a href="{{ route('clients') }}">Client</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
        </div>
      </nav>
<div class="container">
    <h2>Add client</h2>
<form action="{{ route('insertClient') }}" method="post" >
    @csrf
    <label for="ClientName">Client Name</label><br>
    <input type="text" id="clientName" name="ClientName" class="form-control form-control-lg"  value=""><br>
    <label for="phone">Phone</label><br>
    <input type="text" id="phone" name="phone" class="form-control form-control-lg"  value=""><br>
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" class="form-control form-control-lg"  value=""><br>
    <label for="website">Wbsite</label><br>
    <input type="text" id="website" name="website" class="form-control form-control-lg"  value=""><br><br>
    <input type="submit" value="submit">
</form>
</div>
</body>
</html>
