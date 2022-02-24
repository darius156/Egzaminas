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
        <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Vardas Pavarde</label>
                <input style="color: blue;" type="text" name="name" required="" placeholder="Enter name">

            </div>
            <div>
                <label>Specialybe</label>
                <input style="color: blue;" type="text" name="speciality" required="" placeholder="Enter speciality">

            </div>
            <div>
                <input type="file" name="image" required="">

            </div>
            <div>
                <label>Servisas</label>
                <input style="color: blue;" type="text" name="service" required="" placeholder="Enter service">

            </div>
            <div>
                <label>Miestas</label>
                <input style="color: blue;" type="text" name="city" required="" placeholder="Enter city">

            </div>
            <div>
                <input type="submit" value="Issaugoti">

            </div>



        </form>
        <div style="position: relative; top: 70px; right: -20px;">

        <table bgcolor="black" border="1px">
            <tr>
                <th style="padding:30px;">Vardas Pavarde</th>
                <th style="padding:30px;">Specialybe</th>
                <th style="padding:30px;">Nuotrauka</th>
                <th style="padding:30px;">Servisas</th>
                <th style="padding:30px;">Miestas</th>
                <th style="padding:30px;">Veiksmas</th>
                <th style="padding:30px;">Veiksmas2</th>
            </tr>
            @foreach ($data as $data)

            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->speciality}}</td>
                <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></th>
                <td>{{$data->service}}</td>
                <td>{{$data->city}}</td>
                <td><a href="{{url('/updatechef', $data->id)}}">Atnaujinti</a></td>
                <td><a href="{{url('/deletechef', $data->id)}}">Istrinti</a></td>
            </tr>
            @endforeach
        </table>
        </div>

    </div>
            @include("admin.adminscript")


</body>

</html>
