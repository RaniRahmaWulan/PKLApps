<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>hallo pesanan anda : {{$a}}</b><br>
    @if ($a == "ayam goreng")
    <b>harga {{$a}} : Rp.15000</b>
    @elseif ($a == "lobster")
    <b>harga {{$a}} : Rp.20000</b>
    @elseif ($a == "pizza")
    <b>harga {{$a}} : Rp.50000</b>
    @elseif ($a == "tiramisu")
    <b>harga {{$a}} : Rp.30000</b> 
    @elseif ($a == "pasta")
    <b>harga {{$a}} : Rp.25000</b>
    @else
        @endif
</body>
</html>