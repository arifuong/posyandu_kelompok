<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: rgb(0, 0, 0);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh; /* Memastikan tinggi halaman sesuai dengan viewport */
        margin: 0; /* Menghapus margin default */
        padding: 0; /* Menghapus padding default */
        color: #fff; /* Warna teks putih agar kontras dengan latar belakang */
     }
     .form-control {
        background-color: rgba(255, 255, 255, 0.5); /* Warna latar belakang form */
        border: 1px solid #ccc; /* Warna border form */
        color: #000; /* Warna teks */
    }

    .form-control:focus {
        background-color: #fff; /* Warna latar belakang saat fokus */
        border-color: #5cb85c; /* Warna border saat fokus */
        color: #000; /* Warna teks saat fokus */
    }
    </style>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Jadwal</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('data-jadwal.update', $data->id) }}">
                        @csrf
                        @method('post') <!-- Menggunakan PUT untuk method update -->

                        <div class="form-group">
                            <label for="namajadwal">Nama Jadwal</label>
                            <input type="text" id="namajadwal" name="namajadwal" class="form-control" value="{{ $data->namajadwal }}">
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ $data->tanggal }}">
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ $data->keterangan }}">
                        </div>

                        <div class="form-group">
                            <label for="khusus">Khusus</label>
                            <input type="text" id="khusus" name="khusus" class="form-control" value="{{ $data->khusus }}">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
