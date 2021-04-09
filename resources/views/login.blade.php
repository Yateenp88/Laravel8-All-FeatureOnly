<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
   
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <form method="post" action="mylogin">
        {{ csrf_field() }}
 <input type="text" name="uname" placeholder="Username"><p><p>
 <input type="text" name="passwd" placeholder="Password"><p></p>
  
 <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</body>
</html>