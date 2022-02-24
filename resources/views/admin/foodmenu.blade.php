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
      <div style="position: relative; top: 60px; right: -150px;">

      <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

          @csrf

          <div>
          <label>Paslaugos pavadinimas</label>
              <input style="color:black;" type="text" name="title" placeholder="Irasykite pavadinima" required>
          </div>
          <div>
          <label>Kaina</label>
              <input style="color:black;" type="num" name="price" placeholder="Irasykite kaina" required>
          </div>
          <div>
          <label>Nuotrauka</label>
              <input type="file" name="image" required>
          </div>
          <div>
          <label>Aprasymas</label>
              <input style="color:black;" type="text" name="discription" placeholder="Irasykite aprasyma" required>
          </div>
          <div>
              <input type="submit" value="Save">
          </div>


      </form>

      <div>
          <table bgcolor="black">
            <tr>
                <th style="padding: 30px">Paslaugos pavadinimas</th>
                <th style="padding: 30px">Kaina</th>
                <th style="padding: 30px">Aprasymas</th>
                <th style="padding: 30px">Nuotrauka</th>
                <th style="padding: 30px">Veiksmas</th>
                <th style="padding: 30px">Veiksmas2</th>
                  
            </tr>
            @foreach($data as $data)

            <tr align="center">
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->discription}}</td>
                <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>

                <td><a href="{{url('/deletemenu',$data->id)}}">Istrinti</a></td>

                <td><a href="{{url('/updateview',$data->id)}}">Atnaujinti</a></td>

            </tr>
            @endforeach


          </table>


      </div>


      </div>
</div>
      @include("admin.adminscript")

    
  </body>
</html>