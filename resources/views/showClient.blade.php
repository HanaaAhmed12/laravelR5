<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$client->ClientName}}</title>
</head>
<body>
    <p><img src="{{ asset('assets/images/' . $client->image)}}"  width="300px"  alt=""></p>
<h1 style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif "><strong>Client : </strong>{{$client->ClientName}}</h1>
<hr>
<h2 style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif "><strong>Phone : </strong>{{$client->phone}}</h2>
<hr>
<h2 style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif "><strong>Email : </strong>{{$client->email}}</h2>
<hr>
<h2 style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif "><strong>Website : </strong>{{$client->website}}</h2>
</body>
</html>
