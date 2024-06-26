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
            <li class=""><a href="{{route('trashClient')}}">Trash</a></li>

          </ul>
        </div>
      </nav>
<div class="container">
    <h2>Add client</h2>
<form action="{{ route('insertClient') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="ClientName">Client Name</label><br>

    <p style="color: red">
        @error('ClientName')
            {{$message}}
        @enderror
    </p>
    <input type="text" id="clientName" name="ClientName" class="form-control form-control-lg"  value="{{ old('ClientName') }}"><br>
    <label for="phone">Phone</label><br>
    <p style="color: red">
        @error('phone')
           {{$message}}
         @enderror
   </p>

    <input type="text" id="phone" name="phone" class="form-control form-control-lg"  value="{{ old('phone') }}"><br>
    <label for="email">Email</label><br>
    <p style="color: red">
         @error('email')
            {{$message}}
          @enderror
    </p>











    <input type="email" id="email" name="email" class="form-control form-control-lg"  value="{{ old('email') }}"><br>
    <label for="website">Wbsite</label><br>
    <p style="color: red">
        @error('website')
           {{$message}}
         @enderror
   </p>
    <input type="text" id="website" name="website" class="form-control form-control-lg"  value="{{ old('website') }}"><br><br>
    <label for="city">City:</label><br>
    <p style="color: red">
        @error('city')
           {{$message}}
         @enderror
   </p>
    <select name="city" id="city" class="form-control">
      <option value="">Please Select City</option>
      <option value="Cairo"  @selected(old('city') == 'Cairo')>Cairo</option>
      <option value="Giza"   @selected(old('city') == 'Giza')>Giza</option>
      <option value="Alex"  @selected(old('city') == 'Alex')>Alex</option>
    </select>
    <br><br>


    <label for="active">Active:</label><br>
    <p style="color: red">
        @error('active')
           {{$message}}
         @enderror
   </p>
   <input type="checkbox" id="active" name="active" class="form-control" {{ old('active') ? 'checked' : '' }}><br><br>
   <br>



    <input type="submit" value="submit"><br>
</form>
</div>
</body>
</html>
