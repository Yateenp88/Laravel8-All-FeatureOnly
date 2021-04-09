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
     <table class="table table-sm table-dark">
         <tr>
             <th scope="col">Ip</th><th scope="col">Date</th><th scope="col">Status</th>
         </tr>
         @foreach ($pagelists as $pagelist)
         <tr>
             <td>{{$pagelist['ips']}}</td>
             <td>{{$pagelist['dttm']}}</td>
             <td>{{$pagelist['status']}}</td>
         </tr>
         @endforeach
     </table>

     <div>
         {{$pagelists->links()}}
     </div>
         <style>
             .w-5{
                 display: none;
             }
         </style>
     
</body>
</html>