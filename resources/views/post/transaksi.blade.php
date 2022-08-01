<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
           <h2>Pengunjung</h2>
        
        <br>
        <table border="1">
            <tr>
                <td>ID PENGUNJUNG</td>
                <td>NM PENGUNJUNG</td>
                <td>ALAMAT</td>
                <td>JK</td>
                <td>NO TLP</td>
                <td>NO KTP</td>
            </tr>

            <?php $no=1 ?>
            @foreach ($pengunjung as $data)
            <tr>
                <td>{{$data['id_pengunjung']}}</td>
                <td>{{$data['nm_pengunjung']}}</td>
                <td>{{$data['alamat']}}</td>
                <td>{{$data['JK']}}</td>
                <td>{{$data['no_tlp']}}</td>
                <td>{{$data->no_ktp}}</td>
            </tr>
            @endforeach
        </table>

    
           <h2>Detail_Transaksi</h2> 
        
        <br>
        <table border="1">
            <tr>
                <td>ID DTL TRANSAKSI</td>
                <td>NO TRANSAKSI</td>
                <td>NO KAMAR</td>
            </tr>

            <?php $no=1 ?>
            @foreach ($dt as $dataP)
            <tr>
                <td>{{$dataP['id_dtl_transaksi']}}</td>
                <td>{{$dataP['no_transaksi']}}</td>
                <td>{{$dataP->no_kamar}}</td>
            </tr>
            @endforeach
        </table>

           <h2>Kamar</h2> 
        <br>
        <table border="1">
            <tr>
                <td>NO KAMAR</td>
                <td>JENIS KAMAR</td>
                <td>HARGA</td>
            </tr>

            <?php $no=1 ?>
            @foreach ($kamar as $datak)
            <tr>
                <td>{{$datak['no_kamar']}}</td>
                <td>{{$datak['jenis_kamar']}}</td>
                <td>{{$datak->harga}}</td>
            </tr>
            @endforeach
        </table>


           <h2>Transaksi</h2>
    
        <br>
        <table border="1">
            <tr>
                <td>NO TRANSAKSI</td>
                <td>ID PENGUNJUNG</td>
                <td>ID KARYAWAN</td>
                <td>JUMLAH KAMAR</td>
                <td>TANGGAL MASUK</td>
                <td>TANGGAL KELUAR</td>
                <td>LAMA NGINAP</td>
                <td>TOTAL HARGA</td>
            </tr>

            <?php $no=1 ?>
            @foreach ($trans as $dataT)
            <tr>
                <td>{{$dataT['no_transaksi']}}</td>
                <td>{{$dataT['id_pengunjung']}}</td>
                <td>{{$dataT['id_karyawan']}}</td>
                <td>{{$dataT['jmlh_kamar']}}</td>
                <td>{{$dataT['tgl_masuk']}}</td>
                <td>{{$dataT['tgl_keluar']}}</td>
                <td>{{$dataT['lama_nginep']}}</td>
                <td>{{$dataT->total_harga}}</td>
            </tr>
            @endforeach
        </table>
    

          <h2>Karyawan</h2> 

        <br>
        <table border="1">
            <tr>
                <td>ID KARYAWAN</td>
                <td>NAMA KARYAWAN</td>
                <td>JENIS KELAMIN</td>
            </tr>

            <?php $no=1 ?>
            @foreach ($ky as $datakar)
            <tr>
                <td>{{$datakar['id_karyawan']}}</td>
                <td>{{$datakar['nm_karyawan']}}</td>
                <td>{{$datakar->JK}}</td>
            </tr>
            @endforeach
        </table>
</body>
</html>