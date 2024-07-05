<!DOCTYPE html>
<html>
<head>
    <title>Edit Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data User</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('data-user.update', $dataUser->id) }}">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $dataUser->name }}">
                        </div>
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" id="username" name="username" class="form-control" value="{{ $dataUser->username }}">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{ $dataUser->email }}">
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="text" id="password" name="password" class="form-control" value="{{ $dataUser->password }}">
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
