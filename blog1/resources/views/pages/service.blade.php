


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
</head>
<body>
        @include('inc.navbar')
        @yield('content')
        <div class="container mt-4">
        <table class="table table table-bordered">
            <tr class="thead-light">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach ($data as $item)
                <tr>
                    @foreach ($item as $info)
                        <td>
                            {{$info}}
                        </td>    
                    @endforeach
                </tr>
            @endforeach
        </table>
        </div>
      



@foreach ($post as $value=>$data)
   


<h1> {{$data['body']}}</h1>
@endforeach
</body>
</html>

