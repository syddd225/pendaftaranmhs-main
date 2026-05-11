<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>View Data</title>
</head>
<body>
    <table>
<tr>
<th>Kode Pendaftar </th>
<th>Nama Pendaftar</th>
<th>Jalur Pendaftaran</th>
<th>Gelombang</th>
<th>Sistem Kuliah</th>
</tr>
@foreach($mhs2 as $datamaba)
<tr>
<td>{{$datamaba->kode_pendaftar}}</td>
<td>{{$datamaba->nama_pendaftar}}</td>
<td>{{$datamaba->jalurpendaftaran}}</td>
<td>{{$datamaba->periode}}</td>
<td>{{$datamaba->sistemkuliah}}</td>
<td>{{$datamaba->gelombang}}</td>
</tr>
@endforeach
</table>
</body>
</html>