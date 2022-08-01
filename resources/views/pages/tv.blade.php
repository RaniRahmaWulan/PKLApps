<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <fieldset>
           <legend><h1>Tayang Stasiun Televisi</h1></legend>
           @foreach ($stasiuntv as $tv)
    
           <font size = "4">Nama Stasiun TV : <b><i>{{$tv['stasiun']}}</i></b><br></font>
           ---------<br>
               Jam Tayang Program Acara : {{$tv['Jam_tayang']}} WIB <br>
               Program Acara :  {{$tv['Siaran']}} <br>
               Tanggal : {{$tv['tanggal']}} <br>
               <hr>
               @endforeach
        </fieldset>
</body>
</html>