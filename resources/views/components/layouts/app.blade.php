<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <script src="https://kit.fontawesome.com/21db51a6a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="cnt">
        <aside class="sidebar">
            <div class="sidebar-header">
                <img width="100%" src="{{ asset('assets/images/pawanbhatta.jpg') }}" alt="Pawan Bhatta">
            </div>
            <div class="sidebar-body">
                <h4 class="text-center text-light">Pawan Raj Bhatta</h4>
                <div class="social-icons text-light px-3 text-center">
                    <i class="fa-brands fa-facebook fs-4 me-2"></i>
                    <i class="fa-brands fa-instagram fs-4 me-2"></i>
                    <i class="fa-brands fa-github fs-4 me-2"></i>
                    <i class="fa-brands fa-linkedin fs-4 me-2"></i>
                </div>

                <div class="my-3">
                    <a wire:navigate href="{{ route('home') }}"
                        class="sidebar-link {{ request()->routeIs('home') ? 'active' : '' }}"> Profile</a>
                    <a wire:navigate href="{{ route('projects') }}" class="sidebar-link {{ request()->routeIs('projects') ? 'active' : '' }}"> Projects</a>
                    <a href="" class="sidebar-link"> Cerificates</a>
                    <a href="" class="sidebar-link"> Resume</a>
                </div>
            </div>
        </aside>
        <div class="content-wrapper">
            <main class="content">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('assets/js/min.js') }}"></script>
</body>

</html>
