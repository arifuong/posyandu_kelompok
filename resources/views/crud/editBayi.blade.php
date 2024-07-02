<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Bayi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Bayi</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('data-bayi.update', $dataBayi->id) }}">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="NIK">NIK</label>
                            <input type="text" id="NIK" name="NIK" class="form-control" value="{{ $dataBayi->NIK }}">
                        </div>
                        <div class="form-group">
                            <label for="umur">UMUR</label>
                            <input type="text" id="umur" name="umur" class="form-control" value="{{ $dataBayi->umur }}">
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis Kelamin</label>
                            <input type="text" id="jeniskelamin" name="jeniskelamin" class="form-control" value="{{ $dataBayi->jeniskelamin }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_orangtua">Nama Orangtua</label>
                            <input type="text" id="nama_orangtua" name="nama_orangtua" class="form-control" value="{{ $dataBayi->nama_orangtua }}">
                        </div>
                        <div class="form-group">
                            <label for="berat_badan">Berat Badan</label>
                            <input type="text" id="berat_badan" name="berat_badan" class="form-control" value="{{ $dataBayi->berat_badan }}">
                        </div>
                        <div class="form-group">
                            <label for="tinggi_badan">Tinggi Badan</label>
                            <input type="text" id="tinggi_badan" name="tinggi_badan" class="form-control" value="{{ $dataBayi->tinggi_badan }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_imunisasi">Jenis Imunisasi</label>
                            <input type="text" id="jenis_imunisasi" name="jenis_imunisasi" class="form-control" value="{{ $dataBayi->jenis_imunisasi }}">
                        </div>
                        <div class="form-group">
                            <label for="lingkar_kepala">Lingkar Kepala</label>
                            <input type="text" id="lingkar_kepala" name="lingkar_kepala" class="form-control" value="{{ $dataBayi->lingkar_kepala }}">
                        </div>
                        <div class="form-group">
                            <label for="riwayat_penyakit">Riwayat Penyakit</label>
                            <input type="text" id="riwayat_penyakit" name="riwayat_penyakit" class="form-control" value="{{ $dataBayi->riwayat_penyakit }}">
                        </div>
                        <div class="form-group">
                            <label for="status_penyakit">Status Penyakit</label>
                            <input type="text" id="status_penyakit" name="status_penyakit" class="form-control" value="{{ $dataBayi->status_penyakit }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_asi">Jenis ASI</label>
                            <input type="text" id="jenis_asi" name="jenis_asi" class="form-control" value="{{ $dataBayi->jenis_asi }}">
                        </div>
                        <div class="form-group">
                            <label for="lama_menyusui">Lama Menyusui</label>
                            <input type="text" id="lama_menyusui" name="lama_menyusui" class="form-control" value="{{ $dataBayi->lama_menyusui }}">
                        </div>
                        <div class="form-group">
                            <label for="perkembangan">Perkembangan</label>
                            <input type="text" id="perkembangan" name="perkembangan" class="form-control" value="{{ $dataBayi->perkembangan }}">
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
