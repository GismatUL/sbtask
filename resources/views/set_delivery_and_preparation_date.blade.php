<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Skateboard </h2>
    <p><a href="{{url('api/orders_list')}}">Sifarişlər</a></p>

    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlInput1">Hazırlanma tarixi</label>
            <input type="date" class="form-control" name="preparation_date">
            @error('preparation_date')<small class="text-danger"><strong>Hazırlanma tarixi sifarişin yaradılma tarixindən sonra olmalıdır</strong></small>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Çatdırılma tarixi</label>
            <input type="date" class="form-control" name="delivery_date">
            @error('delivery_date')<small class="text-danger"><strong>Çatdırılma tarixi sifarişin hazırlanma tarixindən sonra olmalıdır</strong></small>@enderror
        </div>

        <button class="btn btn-success">Təsdiq et</button>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js"></script>
@include('alertify')
</body>
</html>
