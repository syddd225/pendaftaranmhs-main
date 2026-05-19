<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">

<title>View Data</title>
</head>
<body>
    <h2>Data Mahasiswa Baru</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Kode Pendaftar </th>
            <th>Nama Pendaftar</th>
            <th>Jalur Pendaftaran</th>
            <th>Periode</th>
            <th>Sistem Kuliah</th>
            <th>Gelombang</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
        @foreach($mhs2 as $datamaba)
        <tr>
            <td>{{$datamaba->kode_pendaftar}}</td>
            <td>{{$datamaba->nama_pendaftar}}</td>
            <td>{{$datamaba->jalur_pendaftaran}}</td>
            <td>{{$datamaba->periode}}</td>
            <td>{{$datamaba->sistem_kuliah}}</td>
            <td>{{$datamaba->gelombang}}</td>
            <td>{{$datamaba->progdi}}</td>
            <td>
                <a href="{{url('updatedata',$datamaba->kode_pendaftar)}}"class="btn btn-primary">Edit</a>
                <form action="hapusdata/{{$datamaba->kode_pendaftar}}" method="post"> @csrf @method('delete')
                    <button class="btn btn-danger" onclick="if(!confirm('Apakah Anda Yakin Menghapusnya?')){return false}" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ url('/inputdata') }}">
        <button style="margin-bottom: 15px; padding: 8px 15px; cursor: pointer;">+ Tambah Data</button>
    </a>
</body>
</html>