<!DOCTYPE html>
<html>
<head>
    <title>Edit Data ibu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data ibu</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('data-ibu.update', $dataIbu->id) }}">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="{{ $dataIbu->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal lahir</label>
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ $dataIbu->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $dataIbu->alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="NIK">NIK</label>
                            <input type="integer" id="NIK" name="NIK" class="form-control" value="{{ $dataIbu->NIK }}">
                        </div>
                        <div class="form-group">
                            <label for="Usia_kehamilan">Usia kehamilan</label>
                            <input type="number" id="Usia_kehamilan" name="Usia_kehamilan" class="form-control" value="{{ $dataIbu->Usia_kehamilan }}">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_kehamilan">Jumlah kehamilan</label>
                            <input type="text" id="jumlah_kehamilan" name="jumlah_kehamilan" class="form-control" value="{{ $dataIbu->jumlah_kehamilan }}">
                        </div>
                        <div class="form-group">
                            <label for="riwayat_persalinan_sebelumnya">Riwayat persalinan</label>
                            <input type="text" id="riwayat_persalinan_sebelumnya" name="riwayat_persalinan_sebelumnya" class="form-control" value="{{ $dataIbu->riwayat_persalinan_sebelumnya }}">
                        </div>
                        <div class="form-group">
                            <label for="kesehatan_janin">Kesehatan janin</label>
                            <input type="text" id="kesehatan_janin" name="kesehatan_janin" class="form-control" value="{{ $dataIbu->kesehatan_janin }}">
                        </div>
                        <div class="form-group">
                            <label for="riwayat_penyakit">Riwayat penyakit</label>
                            <input type="text" id="riwayat_penyakit" name="riwayat_penyakit" class="form-control" value="{{ $dataIbu->riwayat_penyakit }}">
                        </div>
                        <div class="form-group">
                            <label for="vitamin">vitamin</label>
                            <input type="text" id="vitamin" name="vitamin" class="form-control" value="{{ $dataIbu->vitamin }}">
                        </div>
                        <div class="form-group">
                            <label for="imunisasi">Imunisasi</label>
                            <input type="text" id="imunisasi" name="imunisasi" class="form-control" value="{{ $dataIbu->imunisasi }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_melahirkan">Tanggal persalinan</label>
                            <input type="date" id="tanggal_melahirkan" name="tanggal_melahirkan" class="form-control" value="{{ $dataIbu->tanggal_melahirkan }}">
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
