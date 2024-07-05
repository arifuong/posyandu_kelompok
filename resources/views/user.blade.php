@extends('layout.admin')
@section('judul', 'Data User')
@section('content')
<div class="table-responsive">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        +
    </button>
    <table class="table">
        <thead>
            <tr>
                <th class="small">name</th>
                <th class="small">email</th>
                <th class="small">username</th>
                <th class="small">password</th>
                <th class="small">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->name}}</td>
                <td>{{ $item->email}}</td>
                <td>{{ $item->username}}</td>
                <td>{{ $item->password}}</td>
                <td>
                    <a href="{{ route('data-user.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('data-user.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
                <form action="{{ route('storeUser') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">NAMA</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="string" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="string" id="password" name="password" class="form-control">
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