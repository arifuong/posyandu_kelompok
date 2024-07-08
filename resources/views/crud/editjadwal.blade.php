<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Jadwal</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('data-jadwal.update', $datajadwal->id) }}">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="namajadwal">Nama Jadwal</label>
                            <input type="text" id="NIK" name="NIK" class="form-control" value="{{ $datajadwal->namajadwal }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ $datajadwal->tanggal }}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ $datajadwal->keterangan }}">
                        </div>
                        <div class="form-group">
                            <label for="khusus">Khusus</label>
                            <input type="text" id="khusus" name="khusus" class="form-control" value="{{ $datajadwal->khusus }}">
                        </div>
                        <div class="form-group">
                            <label for="created_at">Tanggal di buat</label>
                            <input type="date" id="created_at" name="created_at" class="created_at" value="{{ $datajadwal->create_at }}">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body>
</body>
</html>
