<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Data</title>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
   
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <br>
<h2>Add Data In Database</h2>
    <br >
    <form method="post" action="insertData">
        {{ csrf_field() }}
 <input type="text" name="uname" placeholder="Username"><br><br>
 <input type="text" name="email" placeholder="Email"><br><br>
 <input type="text" name="mobile" placeholder="Mobile"> <br> <br>
 <button type="submit" class="btn btn-primary">Add</button> 
</form>
</body>
</html>