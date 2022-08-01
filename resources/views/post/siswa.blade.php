<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
            <h2><li>Table Siswa</li></h2> 
        </legend>
        <br>
        <table border="1">
            <tr>
                <td>NoSISWA</td>
                <td>NAMA</td>
                <td>JK</td>
                <td>JURUSAN</td>
            </tr>

            <?php $no=1 ?>
            @foreach ($siswa as $data)
            <tr>
                <td>{{$data['NoSISWA']}}</td>
                <td>{{$data['NAMA']}}</td>
                <td>{{$data['JK']}}</td>
                <td>{{$data->JURUSAN}}</td>
            </tr>
            @endforeach
        </table>
        <br>
        <br>

    
     
            <h2>Table PESERTA</h2> 
       
        <br>
        <table border="1">
            <tr>
                <td>NoSiswa</td>
                <td>Kode_MP</td>
            </tr>

            <?php $no=1 ?>
            @foreach ($peserta as $datapeserta)
            <tr>
                <td>{{$datapeserta['NoSiswa']}}</td>
                <td>{{$datapeserta->Kode_MP}}</td>
            </tr>
            @endforeach
        </table>
        <br>
        <br>

    
       
                <h2>TABLE MATA PELAJARAN</h2>
            <br>
            <table border="1">
                <tr>
                    <td>KODE_MP</td>
                    <td>NAMA_MP</td>
                    <td>SKS</td>
                    <td>SEMESTER</td>
                </tr>
    
                <?php $no=1 ?>
                @foreach ($mataPelajaran as $datamp)
                <tr>
                    <td>{{$datamp['KODE_MP']}}</td>
                    <td>{{$datamp['NAMA_MP']}}</td>
                    <td>{{$datamp['SKS']}}</td>
                    <td>{{$datamp->SEMESTER}}</td>
                </tr>
                @endforeach
            </table>
        
</body>
</html>