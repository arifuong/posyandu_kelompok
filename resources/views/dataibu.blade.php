@extends('layout.admin')
@section('judul', 'Data Ibu')
@section('content')
<div class="table-responsive">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        +
    </button>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggallahir</th>
                <th>Alamat</th>
                <th>NIK</th>
                <th>Usia kandungan</th>
                <th>Jumlah kehamilan</th>
                <th>Riwayat persalinan</th>
                <th>Kesehatan janin</th>
                <th>Riwayat penyakit</th>
                <th>Vitamin</th>
                <th>Imunisasi</th>
                <th>Tanggal persalinan</th>
                <th>Tanggal dibuat</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->NIK }}</td>
                <td>{{ $item->Usia_kehamilan }}</td>
                <td>{{ $item->jumlah_kehamilan }}</td>
                <td>{{ $item->riwayat_persalinan_sebelumnya }}</td>
                <td>{{ $item->kesehatan_janin }}</td>
                <td>{{ $item->riwayat_penyakit }}</td>
                <td>{{ $item->vitamin }}</td>
                <td>{{ $item->imunisasi }}</td>
                <td>{{ $item->tanggal_melahirkan }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a href="{{ route('data-ibu.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('data-ibu.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ibu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('storeIbu') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="NIK">NIK</label>
                        <input type="text" id="NIK" name="NIK" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Usia_kehamilan">Usia kandungan</label>
                        <input type="number" id="Usia_kehamilan" name="Usia_kehamilan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kehamilan">Jumlah kehamilan</label>
                        <input type="text" id="jumlah_kehamilan" name="jumlah_kehamilan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="riwayat_persalinan_sebelumnya">Riwayat persalinan</label>
                        <input type="text" id="riwayat_persalinan_sebelumnya" name="riwayat_persalinan_sebelumnya" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kesehatan_janin">Kesehatan janin</label>
                        <input type="text" id="kesehatan_janin" name="kesehatan_janin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="riwayat_penyakit">Riwayat penyakit</label>
                        <input type="text" id="riwayat_penyakit" name="riwayat_penyakit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="vitamin">Vitamin</label>
                        <input type="text" id="vitamin" name="vitamin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="imunisasi">Imunisasi</label>
                        <input type="text" id="imunisasi" name="imunisasi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_melahirkan">Tanggal persalinan</label>
                        <input type="date" id="tanggal_melahirkan" name="tanggal_melahirkan" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
