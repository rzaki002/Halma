<!DOCTYPE html>
<html>

<head>
    <title>Halma Grafika</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.
3/css/bootstrap.min.css"> 
    
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Roboto:400, 400italic, 600, 600italic, 700, 700italic');

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }

        .navbar-laravel {
            box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
        }

        .navbar-brand,
        .nav-link,
        .my-form,
        .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light 
navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>

                    @endguest
                    @if (Auth::check())
                        <li><a class="nav-link" href="{{ route('users.index') }}">Manage User</a></li>
                        <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                        <li><a class="nav-link" href="{{ route('produks.index') }}">Manage Produk</a></li>
                        <li><a class="nav-link" href="{{ route('kategori_produks.index') }}">Manage Kategori Produk</a></li>
                        <li><a class="nav-link" href="{{ route('orders.index') }}">Manage Order</a></li>
                        <li><a class="nav-link" href="{{ route('order_details.index') }}">Manage Order Detail</a></li>
                        <li><a class="nav-link" href="{{ route('customers.index') }}">Manage Customer</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>

    @yield('content')

</body>

</html>
