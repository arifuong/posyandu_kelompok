@extends('layout.admin')
@section('judul', 'Data Bayi')
@section('content')
<style>
    body {
        background-image: url('img/i.png');
        background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: black;
            overflow: hidden;
    }
    .te {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 100px;
  height: 40px;
  border: none;
  padding: 0px 20px;
  background-color: rgba(32, 212, 32, 0.913);
  color: white;
  font-weight: 500;
  cursor: pointer;
  border-radius: 0px;
  box-shadow: 5px 5px 0px rgba(85, 211, 85, 0);
  transition-duration: .3s;
}

.svg {
  width: 13px;
  position: absolute;
  right: 0;
  margin-right: 20px;
  fill: white;
  transition-duration: .3s;
}

.te:hover {
  color: transparent;
}

.te:hover svg {
  right: 43%;
  margin: 0;
  padding: 0;
  border: none;
  transition-duration: .3s;
}

.te:active {
  transform: translate(3px , 3px);
  transition-duration: .3s;
  box-shadow: 2px 2px 0px rgb(32, 212, 32);
}
    button {
 width: 100px;
 height: 40px;
 cursor: pointer;
 display: flex;
 align-items: center;
 background: red;
 border: none;
 border-radius: 5px;
 box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
 background: #e62222;
}

button, button span {
 transition: 200ms;
}

button .text {
 transform: translateX(15px);
 color: white;
 font-weight: bold;
}

button .icon {
 position: absolute;
 border-left: 1px solid #c41b1b;
 transform: translateX(50px);
 height: 10px;
 width: 40px;
 display: flex;
 align-items: center;
 justify-content: center;
}

button svg {
 width: 15px;
 fill: #eee;
}

button:hover {
 background: #ff3636;
}

button:hover .text {
 color: black;
}

button:hover .icon {
 width: 90px;
 border-left: none;
 transform: translateX(0);
}

button:focus {
 outline: none;
}

button:active .icon svg {
 transform: scale(0.8);
}
<style>
    /* Ganti warna latar belakang modal dan padding */
    .modal-content {
        background-color: #0080ff;
        padding: 20px;
    }

    /* Ganti ukuran teks judul modal */
    .modal-title {
        font-size: 1.5rem;
        color: #343a40; /* Warna teks judul */
    }

    /* Ganti gaya tombol close */
    .btn-close {
        color: #6c757d; /* Warna ikon tombol close */
    }

    /* Ganti gaya tombol primary */
    .btn-primary {
        background-color: #007bff; /* Warna latar belakang tombol */
        border-color: #007bff; /* Warna border tombol */
    }

    .btn-primary:hover {
        background-color: #0069d9; /* Warna latar belakang tombol saat hover */
        border-color: #0062cc; /* Warna border tombol saat hover */
    }

    /* Ganti ukuran teks dan padding input form */
    .form-control {
        font-size: 1rem;
        padding: .375rem .75rem;
    }

    /* Ganti warna border focus input form */
    .form-control:focus {
        border-color: #80bdff; /* Warna border saat focus */
        box-shadow: 0 0 0 .25rem rgba(0, 123, 255, .25); /* Shadow saat focus */
    }
</style>

</style>

<div class="table-responsive">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        +
    </button>
    <table class="table table-striped">
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
                    <a href="{{ route('data-bayi.edit', $item->id) }}" class="te">
                        <div class="sign">
                            <svg class="svg" viewBox="0 0 512 512">
                                <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                            </svg>
                        </div>
                        
                    </a>
                    <form action="{{ route('data-bayi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="noselect"><span class="text">Delete</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span></button>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah data Bayi</h5>
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
