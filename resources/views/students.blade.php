<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
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
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1 style="text-align: center">Register to our school</h1>
        <form action="{{ route('storeStudent') }}" method="POST">
          @csrf
          <label for="sname">Student Name:</label><br />
          <input type="text" id="sname" name="sname" value="" /><br />
          <label for="age">Age:</label><br />
          <input type="text" id="age" name="age" value="" /><br /><br />
          <label for="phone">Phone Number:</label><br />
          <input type="text" id="phone" name="phone" value="" /><br /><br />
          <label for="email">Email:</label><br />
          <input type="text" id="email" name="email" value="" /><br /><br />
          <input type="submit" value="Submit" />
        </form>
      </div>
    </div>
  </body>
</html>

