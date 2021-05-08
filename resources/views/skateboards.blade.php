<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <h2>Skateboard </h2>
    <p></p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Ad</th>
            <th>Tip</th>
            <th>Rəng</th>
            <th>Qiymət</th>
            <th>Əlavə Çap Qiyməti</th>
            <th>Əməliyyat</th>
        </tr>
        </thead>
        <tbody>
        @foreach($skateboards as $skateboard)
        <tr>
            <td>{{$skateboard->id}}</td>
            <td>{{$skateboard->name}}</td>
            <td>{{$skateboard->type->name}}</td>
            <td>{{$skateboard->price}}</td>
            <td>{{$skateboard->print_price}}</td>
            <td>
            @foreach($skateboard->colors as $color)
             <li style="color: {{$color->hex_code}}">{{$color->name}}</li>
            @endforeach
            </td>
            <td>
                <button type="button" class="btn btn-primary"><i class="fab fa-first-order"></i></button>
            </td>
        </tr>
        @endforeach
        </tbody>
        <span>{{$skateboards->links('pagination::bootstrap-4')}}</span>
    </table>
</div>

</body>
</html>
