@extends('layout.admin')
@section('judul', 'Dashboard')
@section('content')

<style>
  body {
    background-image: url('{{ asset('img/i.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    margin: 0;
    padding: 0;
    color: #fff;
    overflow: ; /* Prevent scrolling */
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
.container {
    text-align: left; /* Align content to the left */
    padding-top: 20px;
    padding-left: 20px; /* Adjust as needed */
}

.dashboard-title {
    font-size: 2em;
    color: white; /* Adjust the color as needed */
    margin-bottom: 20px;
}

.image-container {
    display: flex;
    flex-wrap: wrap; /* Allow images to wrap to the next line */
    gap: 15px; /* Adjust the spacing between images */
}

.img-resize {
    width: 250px; /* Adjust the width as needed */
    height: auto; /* Maintain aspect ratio */
    margin: 5px;
}

</style>

<body>
    <div class="container">
        <h1 class="dashboard-title">Dashboard</h1>
        <div class="image-container">
            <img src="{{ asset('img/imunisasi2.png') }}" class="rounded img-resize" alt="...">
            <img src="{{ asset('img/pertumbuhan.png') }}" class="rounded img-resize" alt="...">
            <img src="{{ asset('img/imunisasi1.png') }}" class="rounded img-resize" alt="...">
            <img src="{{ asset('img/ibu3.png') }}" class="rounded img-resize" alt="...">
        </div>
    </div>
</body>

@endsection
