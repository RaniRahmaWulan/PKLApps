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
            TABLE MATA PELAJARAN
        </legend>
        <br>
        <table border="1">
            <tr>
                <td>KODE_MP</td>
                <td>NAMA_MP</td>
                <td>SKS</td>
                <td>SEMESTER</td>
            </tr>

            <?php $no=1 ?>
            @foreach ($mataPelajaran as $data)
            <tr>
                <td>{{$data['KODE_MP']}}</td>
                <td>{{$data['NAMA_MP']}}</td>
                <td>{{$data['SKS']}}</td>
                <td>{{$data->SEMESTER}}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>