<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">
    <title>Form Input Data</title>
</head>
<body>
 <form action="tambahData" method="post">
@csrf
<div class="form-group">
<label for="nmpendaftar">Kode Pendaftar</label>
<input type="input" class="form-control" name="kd_pendaftar" placeholder="Enter Kode Pendaftar">
</div>
<div class="form-group">
<label for="nmpendaftar">Nama Pendaftar</label>
<input type="input" class="form-control" name="nm_pendaftar" placeholder="Enter Nama Pendaftar">
</div>
<div class="form-group">
<label for="nmpendaftar">Periode</label>
<input type="input" class="form-control" name="periode" placeholder="Enter Periode">
</div>
<div class="form-group">
<label for="nmpendaftar">Jalur Pendaftaran</label>
<input type="input" class="form-control" name="jalur_pendaftaran" placeholder="Enter Jalur Pendaftaran">
</div>
<div class="form-group">
    <label for="gelombang">Gelombang</label>
    <select class="form-control" name="gelombang" id="gelombang">
        <option value="" disabled selected>-- Pilih Gelombang --</option>
        <option value="Gelombang Dini">Gelombang Dini</option>
        <option value="Gelombang 1">Gelombang 1</option>
        <option value="Gelombang 2">Gelombang 2</option>
        <option value="Gelombang 3">Gelombang 3</option>
        <option value="Gelombang 4">Gelombang 4</option>
    </select>
</div>
<label for="nmpendaftar">Sistem Kuliah</label>
    <select class="form-control" name="sistem_kuliah" id "sistem_kuliah">
        <option value=""disable selected>-- Pilih Sistem Kuliah --</option>
        <option value="pagi">Pagi </option>
        <option value="sore">Sore </option>
</select>
</div>
<div class="form-group">
    <label for="progdi">Program Studi</label>
    <select class="form-control" name="progdi" id="progdi">
        <option value="" disabled selected>-- Pilih Program Studi --</option>
        <option value="S1 Informatika">S1 Informatika</option>
        <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
        <option value="D3 Teknologi Informasi">D3 Teknologi Informasi</option>
        <option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
    </select>
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>