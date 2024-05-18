<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit client</title>
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
            <li ><a href="{{route('trashClient')}}">Trash</a></li>
          </ul>
        </div>
      </nav>
<div class="container">
    <h2>Edit client</h2>
<form action="{{ route('updateClients' , $client->id) }}" method="post" >
    @csrf
    @method('put')
    <label for="ClientName">Client Name</label><br>
    <p style="color: red">
        @error('ClientName')
            {{ $message }}
        @enderror
    </p>
    <input type="text" id="clientName" name="ClientName" class="form-control form-control-lg"  value="{{ $client->ClientName }}"><br>
    <label for="phone">Phone</label><br>
    <p style="color: red">
        @error('phone')
            {{ $message }}
        @enderror
    </p>
    <input type="text" id="phone" name="phone" class="form-control form-control-lg"  value="{{ $client->phone }}"><br>
    <label for="email">Email</label><br>
    <p style="color: red">
        @error('email')
            {{ $message }}
        @enderror
    </p>
    <input type="email" id="email" name="email" class="form-control form-control-lg"  value="{{ $client->email }}"><br>
    <label for="website">Website</label><br>
    <p style="color: red">
        @error('website')
            {{ $message }}
        @enderror
    </p>
    <input type="text" id="website" name="website" class="form-control form-control-lg"  value="{{ $client->website }}"><br><br>
    <input type="submit" value="update">


</form>
</div>
</body>
</html>
