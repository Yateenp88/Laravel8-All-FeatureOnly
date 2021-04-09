<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
         <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}" defer></script>
   
         <!-- Styles -->
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
     <form action="/edit" method="POST">
        @csrf
    <input type="hidden" name="id" value={{$data['id']}}><br><br>
    <input type="text" name="uname" value="{{$data['uname']}}"><br><br>
    <input type="text" name="email" value="{{$data['email']}}"><br><br>
    <input type="text" name="mob" value="{{$data['mob']}}"><br><br>
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
 
</body>
</html>