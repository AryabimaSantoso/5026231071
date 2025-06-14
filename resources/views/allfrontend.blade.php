<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aryabima Kurnia P. S. : 5026231071</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        .jumbotron {
            background-color: #9de2e2;
            height: 180px;
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center mx-auto">
        <h1>All Front End</h1>
        <h3>5026231071 : Aryabima Kurnia P. S.</h3>
    </div>

    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/AllFrontEnd/bootstrap1') }}">bootstrap1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/AllFrontEnd/danantara') }}">Danantara</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/AllFrontEnd/ets') }}">ETS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/AllFrontEnd/js1') }}">js1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/AllFrontEnd/js2') }}">js2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/AllFrontEnd/linktree') }}">linktree</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/AllFrontEnd/pertama') }}">pertama</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/AllFrontEnd/pertemuan4') }}">pertemuan4</a>
            </li>
        </ul>
    </nav>
    <br>
    <nav class="navbar navbar-expand-sm bg-light">
        <a href="/template">Back to Template</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
