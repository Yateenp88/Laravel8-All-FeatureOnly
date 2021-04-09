<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
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
         @foreach ($datatb as $item)
         <tr>
             <td>{{$item->id}}</td>
             <td>{{$item->ips}}</td>
             <td>{{$item->ser}}</td>
            
         </tr>
         @endforeach
     </table>
 
</body>
</html>