<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store Data</title>
</head>
<body>
    @if(session('username'))
    <h3>Data save successfully {{session('username')}}</h3>
 @endif
    <form action="storeData" method="POST">
        @csrf
        
    <input type="text" name="uname" placeholder="Username">
    <input type="text" name="pwd" placeholder="Password">
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>  
</body>
</html>