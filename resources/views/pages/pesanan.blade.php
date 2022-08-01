<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2><u><center>Pesanan</center></u></h2>
    
    @if ($a == "ayam goreng")
    <b>hallo pesanan anda : {{$a}}</b><br>
    <b>harga {{$a}} : Rp.15000</b>
    @elseif ($a == "lobster")
    <b>hallo pesanan anda : {{$a}}</b><br>
    <b>harga {{$a}} : Rp.20000</b>
    @elseif ($a == "pizza")
    <b>hallo pesanan anda : {{$a}}</b><br>
    <b>harga {{$a}} : Rp.50000</b>
    @elseif ($a == "tiramisu")
    <b>hallo pesanan anda : {{$a}}</b><br>
    <b>harga {{$a}} : Rp.30000</b> 
    @elseif ($a == "pasta")
    <b>hallo pesanan anda : {{$a}}</b><br>
    <b>harga {{$a}} : Rp.25000</b>
    @else
    {{$c}}
        @endif

    <hr>
    @if ($b == "ayam goreng")
    <b>hallo pesanan anda : {{$b}}</b><br>
    <b>harga {{$b}} : Rp.15000</b>
    @elseif ($b == "lobster")
    <b>hallo pesanan anda : {{$b}}</b><br>
    <b>harga {{$b}} : Rp.20000</b>
    @elseif ($b == "pizza")
    <b>hallo pesanan anda : {{$b}}</b><br>
    <b>harga {{$b}} : Rp.50000</b>
    @elseif ($b == "tiramisu")
    <b>hallo pesanan anda : {{$b}}</b><br>
    <b>harga {{$b}} : Rp.30000</b> 
    @elseif ($b == "pasta")
    <b>hallo pesanan anda : {{$b}}</b><br>
    <b>harga {{$b}} : Rp.25000</b>
    @else
        {{$c}}
        @endif
</body>
</html>