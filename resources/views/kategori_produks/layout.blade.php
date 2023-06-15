<!DOCTYPE html>
<html>

<head>
    <title> Kategori Produk</title>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
    .container {
        padding-top: 5%;
    }

    .pull-right {
        padding-top: 3%;
        padding-bottom: 5%;
    }

    body {
        /* background: url(https://source.unsplash.com/TMa_5BLvDqQ/1600x900);
        background-size: cover; */
    }

    .table {
        background: white;
    }
</style>

<body>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
