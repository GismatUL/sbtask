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
            <th>Əməliyyat</th>
            <th>Ad</th>
            <th>Rəng</th>
            <th>Say</th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Ünvan</th>
            <th>Tarix</th>
            <th>Çap şəkli</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
        <tr>
            <td><a href="{{url('api/set_delivery_and_preparation_date/'.$order->id)}}">
                    <button type="button" class="btn btn-warning"><i class="fa fa-check" aria-hidden="true"></i></button>
                </a></td>
            <td>{{$order->product->name}}</td>
            <td>{{$order->color->name}}</td>
            <td>{{$order->amount}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->address}}</td>
            <td>{{date_format(date_create(substr($order->created_at,0,10)),"d-m-Y")}}</td>
            <td>@if(!empty($order->image))<img src="{{$order->image}}" class="img-rounded" width="304" height="236" >@endif</td>
        </tr>
        @endforeach
        </tbody>
        <span>{{$orders->links('pagination::bootstrap-4')}}</span>
    </table>
</div>

</body>
</html>
