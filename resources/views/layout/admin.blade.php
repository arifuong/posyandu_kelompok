<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif,;
            font-size: .875rem;
        }
        .bold-text {
            font-weight: bold; /* atau nilai numerik seperti 700 */
        }
        .Btn {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition-duration: 0.3s;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
            background-color: RGB(29, 185, 84);
        }

        /* plus sign */
        .sign {
            width: 100%;
            transition-duration: 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sign svg {
            width: 18px;
        }

        .sign svg path {
            fill: black;
        }
        /* text */
        .text {
            position: absolute;
            right: 0%;
            width: 0%;
            opacity: 0;
            color: black;
            font-size: 1.2em;
            font-weight: 600;
            transition-duration: 0.3s;
        }
        /* hover effect on button width */
        .Btn:hover {
            width: 125px;
            border-radius: 40px;
            transition-duration: 0.3s;
        }

        .Btn:hover .sign {
            width: 30%;
            transition-duration: 0.3s;
            padding-left: 20px;
        }
        /* hover effect button's text */
        .Btn:hover .text {
            opacity: 1;
            width: 70%;
            transition-duration: 0.3s;
            padding-right: 10px;
        }
        /* button click effect*/
        .Btn:active {
            transform: translate(2px, 2px);
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Header -->
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="{{ asset('img/p4.png') }}" alt="Logo" width="100" height="50" class="d-inline-block align-top">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">POSYANDUKU</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('/dashboard') }}">
                        <span data-feather="home"></span> Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('user') }}">
                        <span data-feather="users"></span> User
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Data
                      </a>
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('ibu') }}">
                            <span data-feather="file"></span> Data Ibu hamil
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('bayi') }}">
                            <span data-feather="shopping-cart"></span> Data Bayi
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('jadwal')}}">
                        <span data-feather="bar-chart-2"></span> Jadwal
                      </a>
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf            
                      <button class="Btn">
                        <div class="sign">
                          <svg viewBox="0 0 512 512">
                            <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                          </svg>
                        </div>
                      </button>
                    </form>
                  </ul>
                </div>
              </div>
            </div>
          </nav>

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">@yield('judul')</h1>
            </div>
            @yield('content')
        </main>
        <!-- End Main content -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var currentPath = window.location.pathname;
        var navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(function(link) {
            var linkPath = new URL(link.href).pathname;
            if (linkPath === currentPath) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }

            link.addEventListener('click', function() {
                navLinks.forEach(function(link) {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    });
</script>
</body>
</html>
