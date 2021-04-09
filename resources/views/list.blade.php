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
     <table class="table ">
         <tr>
             <th scope="col">Ip</th><th scope="col">Date</th><th scope="col">Status</th><th>Delete</th><th>Action</th>
         </tr>
         @foreach ($profilepage as $profilepage1)
         <tr>
             <td>{{$profilepage1['id']}}</td>
             <td>{{$profilepage1['uname']}}</td>
             <td>{{$profilepage1['email']}}</td>
             <td><a href={{"delete/".$profilepage1['id']}}>Delete</a></td>
             <td><a href={{"edit/".$profilepage1['id']}}>Update</a></td>
         </tr>
         @endforeach
     </table>
 
</body>
</html>