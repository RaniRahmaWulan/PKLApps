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
           <h2>Data Mahasiswa</h2>
        </legend>
        @foreach ($dosen as $dosen)
            <font size = "4"><b><i>Nama : {{$dosen['namadosen']}}</i></b> <br>
            <i>Mata Kuliah : {{$dosen['matkul']}}</i></font>
            <?php $nilai = 0?>

            @foreach ($dosen['mahasiswa'] as $mahasiswa)
                <li>Nama Mahasiswa : {{$mahasiswa['nama']}} <br>
                Nilai : {{$mahasiswa['nilai']}} <br>
                Grade : 
                @if ($mahasiswa['nilai'] >= 90) 
                    A
                @elseif($mahasiswa['nilai'] >= 80)
                    B
                @elseif($mahasiswa['nilai'] >= 70)
                    C
                @elseif($mahasiswa['nilai'] >= 50) 
                    D
                @elseif($mahasiswa['nilai'] <= 50)
                    E
                @else
                    Grade Tidak ada
                   @endif

                   <?php $nilai += $mahasiswa['nilai']?>
            </li>
            @endforeach
            <br>
            ====================================<br>
            <b>Total NIlai Keseluruhan Mahasiswa : <i>{{$nilai}}</i></b><br>
            <?php $nrata = $nilai / count($dosen['mahasiswa'])?>
            <b>Rata-rata : <i>{{$nrata}}</i></b><br>
            <b>Grade dari Dosen <i>{{$dosen['namadosen']}} : </b>
            @if($nrata >= 90)
                 A
            @elseif($nrata >= 80)
                 B
            @elseif($nrata >= 70)
                 C    
            @elseif($nrata >= 50)
                 D   
            @elseif($nrata <= 50)
                 E    
            @else 
                 Grade Tidak Ada
            @endif</i>
            <hr>
        @endforeach
    </fieldset>
</body>
</html>