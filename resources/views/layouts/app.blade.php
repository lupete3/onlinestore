<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Online Store')</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" >

</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="#">Online Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                    <a class="nav-link active" href="{{ route('product.index') }}">Products</a>
                    <a class="nav-link active" href="{{ route('cart.index') }}">Cart</a>
                    <a class="nav-link active" href="{{ route('home.about') }}">About</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                        @guest
                            <a class="nav-link active" href="{{ route('login') }}">Login</a>
                            <a class="nav-link active" href="{{ route('register') }}">Register</a>
                        @else
                            <a class="nav-link active" href="{{ route('myaccount.orders') }}">My Orders</a>

                            <form id="logout" action="{{ route('logout') }}" method="POST">
                                <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">Logout</a>
                                @csrf
                            </form>
                        @endguest
                </div>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'A Laravel Online Store')</h2>
        </div>
    </header>
    <!-- header -->
    
    <!-- content -->
    <div class="container my-4">
        @yield('content')
    </div>
    <!-- content -->

    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://pdevtuto.com/">PdevTuto</a> - <b>Lupete Placide</b>
            </small>
        </div>
    </div>
    <!-- footer -->

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}" ></script>


</body>
</html>