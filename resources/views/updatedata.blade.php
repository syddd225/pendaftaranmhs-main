<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">
    <title>Halaman Update</title>
    <form action="/updatedata/{{$kd_pend->kode_pendaftar}}" method="post">
            @csrf @method('put')
        <div class="form-group">
            <label for="nmpendaftar">Kode Pendaftar</label>
            <input type="input" class="form-control" name="kd_pendaftar" value="{{$kd_pend->kode_pendaftar}}">
        </div>
        <div class="form-group">
            <label for="nmpendaftar">Nama Pendaftar</label>
            <input type="input" class="form-control" name="nm_pendaftar" value="{{$kd_pend->nama_pendaftar}}">
        </div>
        <div class="form-group">
            <label for="nmpendaftar">Periode</label>
            <input type="input" class="form-control" name="periode" value="{{$kd_pend->periode}}">
        </div>
        <div class="form-group">
            <label for="nmpendaftar">Jalur Pendaftaran</label>
            <input type="input" class="form-control" name="jalur_pendaftaran" value="{{$kd_pend->jalur_pendaftaran}}">
        </div>
        <div class="form-group">
            <label>Pilih Gelombang</label>
            <select class="form-control" name="gelombang">
                <option selected>{{$kd_pend->gelombang}}</option>
                <option value="Gelombang Dini">Gelombang Dini</option>
                <option value="Gelombang 1">Gelombang 1</option>
                <option value="Gelombang 2">Gelombang 2</option>
                <option value="Gelombang 3">Gelombang 3</option>
                <option value="Gelombang 4">Gelombang 4</option>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="progdi">
            <option selected>{{$kd_pend->progdi}}</option>
            <option value="S1 Informatika">S1 Informatika</option>
            <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
            <option value="D3 Teknologi Informasi">D3 Teknologi Informasi</option>
            <option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-
    YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    </head>
</body>
</html>