<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="{{ asset('assets/styles/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }
    </style>
    @yield('head')
</head>

<body>
    <main class="d-flex flex-nowrap">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                        class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">New Admin</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Sign out</a></li>
                </ul>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link text-white" id="a">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin') }}/dashboard" class="nav-link text-white" id="dashboard">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin') }}/loan" class="nav-link text-white" id="loan">
                        Loans
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin') }}/bank" class="nav-link text-white" id="bank">
                        Banks
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin') }}/borrower" class="nav-link text-white" id="borrower">
                        Borrower
                    </a>
                </li>
            </ul>
        </div>
        <div class="b-example-divider b-example-vr" id='content'>
        </div>
        @yield('content')
    </main>

    <script src="{{ asset('assets/scripts/bootstrap.bundle.min.js') }}"></script>
    <script>
        let li = document.getElementsByClassName('nav-link');
        for (let i = 0; i < li.length; i++)
            li[i].className = "nav-link text-white";
        let url = window.location.href.split('/');
        let active = document.getElementById(url[url.length - 1]);
        active.className = "nav-link active";
    </script>
</body>

</html>
