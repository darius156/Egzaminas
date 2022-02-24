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

        <form action="{{url('/updatefoodchef', $data->id)}}" method="Post" enctype="multipart/form-data">

        @csrf
            <div>
                <label>Vardas Pavarde</label>
                <input style="color:blue;" type="text" name="name" value="{{$data->name}}">
            </div>
            <div>
                <label>Specialybe</label>
                <input style="color:blue;" type="text" name="speciality" value="{{$data->speciality}}">
            </div>
            <div>
                <label>Sena nuotrauka</label>
                <img height="200" width="200" src="/chefimage/{{$data->image}}">
            </div>
            <div>
                <label>Nauja nuotrauka</label>
                <input type="file" name="image">
            </div>
            <div>
                <label>Servisas</label>
                <input style="color:blue;" type="text" name="service" value="{{$data->service}}">
            </div>
            <div>
                <label>Miestas</label>
                <input style="color:blue;" type="text" name="city" value="{{$data->city}}">
            </div>
            <div>
                <input style="color:blue;"  type="submit" value="Atnaujinti">
            </div>
        </form>


        <div>
            @include("admin.adminscript")


</body>

</html>
