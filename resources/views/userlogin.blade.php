 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Login</title>
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 </head>
 <body>
     
<h1>User Login </h1>
<form action="makeLogin" method="POST">
    @csrf
<input type="text" name="uname" placeholder="Username">
<input type="text" name="pwd" placeholder="Password">
<button type="submit" class="btn btn-primary">Submit</button>
</form>
 </body>
 </html>