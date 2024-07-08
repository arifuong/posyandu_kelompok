@extends('layout.admin')
@section('judul', 'Jadwal')
@section('content')
<div class="table-responsive">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        +
    </button>
    <table class="table">
        <thead>
            <tr>
                <th class="small">Nama Jadwal</th>
                <th class="small">Tanggal</th>
                <th class="small">Keterangan</th>
                <th class="small">Khusus</th>
                <th class="small">Tanggal di buat</th>
                <th class="small">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->namajadwal}}</td>
                <td>{{ $item->tanggal}}</td>
                <td>{{ $item->keterangan}}</td>
                <td>{{ $item->khusus}}</td>
                <td>{{ $item->created_at}}</td>
                <td>
                    <a href="{{ route('data-jadwal.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('data-jadwal.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
                <form action="{{ route('storejadwal') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="namajadwal">Nama Jadwal</label>
                        <input type="text" id="namajadwal" name="namajadwal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="khusus">Khusus</label>
                        <input type="text" id="khusus" name="khusus" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="created_at">tanggal di buat</label>
                        <input type="date" id="created_at" name="created_at" class="form-control">
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
