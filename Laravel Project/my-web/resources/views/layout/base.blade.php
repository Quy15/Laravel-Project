<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)">My Web</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    @auth
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/show">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Link</a>
                        </li>
                    </ul>
                    @endauth
                    <ul class="navbar-nav ml-auto" style="position: absolute; right: 50px">
                        @guest
                        <li>
                            <a href="\login" class="nav-link text-success">Login</a>
                        </li>
                        <li>
                            <a href="\register" class="nav-link text-danger">Register</a>
                        </li>
                        @else
                        <li>
                            <a href="\logout" class="nav-link text-danger">Logout</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    @yield('script')
</body>

</html>