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
    <p><a href="{{url('api/products')}}">Məhsullar</a></p>
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Rəng</label>
            <select class="form-control" name="color_id">
                @foreach($skateboard_details->colors as $color)
                    <option style="color: {{$color->hex_code}}" value="{{$color->id}}">{{$color->name}}</option>
                @endforeach
            </select>
            @error('color_id')<small class="text-danger"><strong>Başlıq boş buraxıla bilməz</strong></small>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Say</label>
            <input type="number" class="form-control" value="1" name="amount">
            @error('amount')<small class="text-danger"><strong>Məshul sayı boş buraxıla bilməz və 1-10 arasında olmalıdır</strong></small>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Şəkil</label>
            <input type="file" class="form-control" name="image">
            @error('image')<small class="text-danger"><strong>Şəklin ölçüsü max 2mb ola bilər və format : jpeg,jpg,png,gif olmalıdır</strong></small>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Telefon</label>
            <input type="text" class="form-control" name="phone">
            @error('phone')<small class="text-danger"><strong>Email təqdim olunmadığı halda telefon nömrəsi mütləqdir</strong></small>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" name="email">
            @error('email')<small class="text-danger"><strong>Telefon nömrəsi təqdim olunmadığı halda email ünvanı mütləqdir</strong></small>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ünvan</label>
            <input type="text" class="form-control" name="address">
            @error('address')<small class="text-danger"><strong>Ünvan boş buraxıla bilməz</strong></small>@enderror
        </div>
        <button class="btn btn-success">Sifarish et</button>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js"></script>
@include('alertify')
</body>
</html>
