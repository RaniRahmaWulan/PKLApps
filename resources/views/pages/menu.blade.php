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
        <legend>
            Menu
        </legend>
        @foreach ($menu as $item)
        <li>{{$item['menu1']}}</li>  <br>
        <li>{{$item['menu2']}}</li> <br>

        @foreach ($menu as $item)
        <ul type="square">
            <li>{{$item['menu4']}}</li>
        </ul>

           @foreach ($item['or'] as $olahraga)
               <ul>
                   <ul><li>{{$olahraga}}</li></ul>
               </ul>
           @endforeach
        @endforeach  

        @foreach ($item['menu5'] as $menu5)
        <ul type="square">
            <li>{{$menu5}}</li>
        </ul>
        @endforeach
        <li>{{$item['menu3']}}</li>
        @endforeach
    </fieldset>
</body>
</html>