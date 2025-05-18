<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Helpero</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/pertemuan4.css') }}">
    </head>
    <body>
        <section class="container-fluid">
            <div class="row text-center">
                <div class="col-md-6 align-content-center order-2 order-md-1 text-center"
                    id="logo">
                    <img class="img-fluid" src="{{ asset('images/helpero.png') }}" alt>
                </div>
                <div class="col-md-6 align-content-center text-dark order-1 order-md-2" id="form">
                    <h2 class="text-white text-center mb-4">Masuk ke Akun</h2>
                    <form class="w-75 mx-auto">
                    <div class="mb-4 text-start">
                        <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com">
                    </div>
                    <div class="mb-4 text-start">
                        <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="masukkan password anda">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                    <p class="text-white text-center mt-3">
                        belum punya akun? <a href="#" id="daftar">daftar</a>
                    </p>
                    </form>
                </div>
            </div>

        </section>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </body>
</html>
