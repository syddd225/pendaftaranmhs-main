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
<label for="nmpendaftar">Gelombang</label>
<input type="input" class="form-control" name="gelombang" placeholder="Enter Gelombang">
</div>
<div class="form-group">
<label for="nmpendaftar">Sistem Kuliah</label>
<input type="input" class="form-control" name="sistem_kuliah" placeholder="Enter Sistem Kuliah">
</div>
<div class="form-group">
<label for="nmpendaftar">Program Studi</label>
<input type="input" class="form-control" name="progdi" placeholder="Enter Program Studi">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>