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
<form action="{{ route('updateClients' , $client->id) }}" method="post"  enctype="multipart/form-data">
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
    <label for="city">City:</label><br>
    <p style="color: red">
        @error('city')
           {{$message}}
         @enderror
   </p>
    <select name="city" id="city" class="form-control">
      <option value="">Please Select City</option>
      <option value="Cairo"  @selected($client->city == 'Cairo')>Cairo</option>
      <option value="Giza"   @selected($client->city == 'Giza')>Giza</option>
      <option value="Alex"   @selected($client->city == 'Alex')>Alex</option>
    </select>
    <br><br>
    <label for="active">Active:</label><br>
    <p style="color: red">
        @error('active')
           {{$message}}
         @enderror
   </p>
   <input type="checkbox" id="active" name="active" class="form-control" {{ $client->active ? 'checked' : '' }}><br><br>
   <br>
    <label for="image">Image:</label><br>
    <p style="color: red">
        @error('image')
           {{$message}}
         @enderror
   </p>
    <input type="file" id="image" name="image" class="form-control"><br><br>

    @if ($client->image)
    <div>
        <img src="{{ asset('assets/images/' . $client->image) }}" alt="Client Image" style="max-width: 200px;">
    </div>
    @endif

    <input type="submit" value="update">
</form>
</div>
</body>
</html>
