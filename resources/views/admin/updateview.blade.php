<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include("admin.admincss")

</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <div style="position: relative; top: 60px; right: -150px;">

      <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

          @csrf

          <div>
          <label>Paslaugos pavadinimas</label>
              <input style="color:black;" type="text" name="title" value="{{$data->title}}" required>
          </div>
          <div>
          <label>Kaina</label>
              <input style="color:black;" type="num" name="price" value="{{$data->price}}" required>
          </div>
          
          <div>
          <label>Aprasymas</label>
              <input style="color:black;" type="text" name="discription" value="{{$data->discription}}" required>
          </div>
          <div>
          <label>Sena nuotrauka</label>
              <img heigh="200" width="200"src="/foodimage/{{$data->image}}">
          </div>
          <div>
          <label>Nauja nuotrauka</label>
              <input type="file" name="image" required>
          </div>
          <div>
              <input type="submit" value="Issaugoti">
          </div>


      </form>

      <div>
        <div>
            @include("admin.adminscript")


</body>

</html>
