<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Standart</title>
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
</head>

<body>

<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">

            <a class="navbar-brand header-logo" href="/">
                <img src="{{asset('/assets/images/logo.svg')}}" class="header-logo_img" alt="logo">
                <p class="header-logo_text">
                    Qurilishda standarlashtirish
                    Respublika markazi
                </p>
            </a>
            <button class="navbar-toggler border-0 px-0 focus-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav align-items-md-center ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-md-0 py-md-1 mx-md-2 active" aria-current="page" href="/">BOSH sahifa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-0 py-md-1 mx-md-2" href="#">Markaz saytI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-0 py-md-1 mx-md-2" href="#">aloqa</a>
                    </li>

                    <li class="nav-item d-flex my-md-0 my-2">
                        <a class="nav-link px-md-0 py-md-1 ms-md-4 me-2" href="#">
                            <img src="{{asset('/assets/images/telegram.svg')}}" alt="social">
                        </a>

                        <a class="nav-link px-md-0 py-md-1 mx-2" href="#">
                            <img src="{{asset('/assets/images/instagram.svg')}}" alt="social">
                        </a>

                        <a class="nav-link px-md-0 py-md-1 me-md-4 ms-md-2" href="#">
                            <img src="{{asset('/assets/images/facebook.svg')}}" alt="social">
                        </a>
                    </li>

                    <li class="nav-item d-flex">
                        <a class="nav-link px-md-0 py-md-1 ms-md-5 me-2" href="#">
                            UZ
                        </a>

                        <a class="nav-link px-md-0 py-md-1 mx-2" href="#">
                            RU
                        </a>

                        <a class="nav-link px-md-0 py-md-1 ms-2 me-md-2" href="#">
                            EN
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
    @yield('content')
<footer class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <p class="footer-text">
                    Qurilishda standartlashtirish respublika markazi | Standartlar elektron katalogi
                    All rights reserved © 2021
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('/assets/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>