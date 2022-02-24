<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-app-layout>
   
   </x-app-layout>
   
   <!DOCTYPE html>
   <html lang="en">
     <head>
     @include("admin.admincss")
    
     </head>
     <body>
     <div class="container-scroller">
         
         @include("admin.navbar")
         <div style="position: relative; top: 60px; right: -150px; ">
             <table bgcolor="grey" border="3px">

             <tr>
                 <th style="padding: 30px">Vardas</th>
                 <th style="padding: 30px">Email</th>
                 <th style="padding: 30px">Veiksmas</th>

             </tr>
             @foreach($data as $data)


             <tr align="center">
                 <th>{{$data->name}}</th>
                 <th>{{$data->email}}</th>
                 @if($data->usertype=="0")


                 <th><a href="{{url('/deleteuser',$data->id)}}">Istrinti</a></th>
                 @else 
                 <th><a>Negalima</a></th>

                 @endif

             </tr>
             @endforeach
             </table>
</div>
   
         @include("admin.adminscript")
</div>
   
       
     </body>
   </html>
</body>
</html>