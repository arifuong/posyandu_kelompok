@extends('layout.admin')
@section('judul', 'Data Bayi')
@section('content')
<div class="table-responsive">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        +
    </button>
    <table class="table">
        <thead>
            <tr>
                <th class="small">NIK</th>
                <th class="small">Umur</th>
                <th class="small">Jenis kelamin</th>
                <th class="small">Nama orangtua</th>
                <th class="small">Berat badan</th>
                <th class="small">Tinggi badan</th>
                <th class="small">Jenis imunisasi</th>
                <th class="small">Lingkar kepala</th>
                <th class="small">Riwayat penyakit</th>
                <th class="small">Status penyakit</th>
                <th class="small">Jenis ASI</th>
                <th class="small">Lama menyusui</th>
                <th class="small">Perkembangan</th>
                <th class="small">Tanggal di buat</th>
                <th class="small">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->NIK }}</td>
                <td>{{ $item->umur }}</td>
                <td>{{ $item->jeniskelamin }}</td>
                <td>{{ $item->nama_orangtua }}</td>
                <td>{{ $item->berat_badan}}</td>
                <td>{{ $item->tinggi_badan}}</td>
                <td>{{ $item->jenis_imunisasi}}</td>
                <td>{{ $item->lingkar_kepala}}</td>
                <td>{{ $item->riwayat_penyakit}}</td>
                <td>{{ $item->status_penyakit}}</td>
                <td>{{ $item->jenis_asi}}</td>
                <td>{{ $item->lama_menyusui}}</td>
                <td>{{ $item->perkembangan}}</td>
                <td>{{ $item->created_at}}</td>
                <td>
                    <a href="{{ route('data-bayi.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('data-bayi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('storeBayi') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="NIK">NIK</label>
                        <input type="integer" id="NIK" name="NIK" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="umur">UMUR</label>
                        <input type="number" id="umur" name="umur" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis kelamin</label>
                        <input type="text" id="jeniskelamin" name="jeniskelamin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama_orangtua">Nama orangtua</label>
                        <input type="text" id="nama_orangtua" name="nama_orangtua" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="berat_badan">Berat badan</label>
                        <input type="number" id="berat_badan" name="berat_badan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tinggi_badan">Tinggi badan</label>
                        <input type="number" id="tinggi_badan" name="tinggi_badan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jenis_imunisasi">Jenis imunisasi</label>
                        <input type="text" id="jenis_imunisasi" name="jenis_imunisasi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lingkar_kepala">Lingkar kepala</label>
                        <input type="number" id="lingkar_kepala" name="lingkar_kepala" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="riwayat_penyakit">Riwayat penyakit</label>
                        <input type="text" id="riwayat_penyakit" name="riwayat_penyakit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status_penyakit">Status penyakit</label>
                        <input type="text" id="status_penyakit" name="status_penyakit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jenis_asi">Jenis ASI</label>
                        <input type="text" id="jenis_asi" name="jenis_asi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lama_menyusui">Lama menyusui</label>
                        <input type="number" id="lama_menyusui" name="lama_menyusui" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="perkembangan">Perkembangan</label>
                        <input type="text" id="perkembangan" name="perkembangan" class="form-control">
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
