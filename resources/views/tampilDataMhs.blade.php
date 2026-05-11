<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>View Data</title>
</head>
<body>
    <h2>Data Mahasiswa Baru</h2>
    
    <a href="{{ url('/inputdata') }}">
        <button style="margin-bottom: 15px; padding: 8px 15px; cursor: pointer;">+ Tambah Data</button>
    </a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Kode Pendaftar </th>
            <th>Nama Pendaftar</th>
            <th>Jalur Pendaftaran</th>
            <th>Periode</th>
            <th>Sistem Kuliah</th>
            <th>Gelombang</th>
            <th>Program Studi</th>
        </tr>
        @foreach($mhs2 as $datamaba)
        <tr>
            <td>{{$datamaba->kode_pendaftar}}</td>
            <td>{{$datamaba->nama_pendaftar}}</td>
            <td>{{$datamaba->jalurpendaftaran}}</td>
            <td>{{$datamaba->periode}}</td>
            <td>{{$datamaba->sistem_kuliah}}</td>
            <td>{{$datamaba->gelombang}}</td>
            <td>{{$datamaba->progdi}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>