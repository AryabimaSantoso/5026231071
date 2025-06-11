<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
    <script>
        function hello(){
            alert("Selamat anda mendapatkan hadiah 1 Milyar!");
        }

        function tambah(){
            var bilangan1 = document.getElementById("bil1").value;
            var bilangan2 = document.getElementById("bil2").value;

            var hasil = Number.parseInt(bilangan1) + Number.parseInt(bilangan2);

            document.getElementById("hasil").innerHTML = hasil;
        }
    </script>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary" onclick="hello();">Klik disini</button>
        <p>
            Bilangan 1 :
            <input type="text" name="" id="bil1" value="0" class="form-control">
            <br>
            Bilangan 2 :
            <input type="text" name="" id="bil2" value="0" class="form-control">
            <br>
            Hasil Penjumlahan : <div id="hasil"></div>
            <br>
            <button class="btn btn-success" onclick="tambah();">Tambah</button>
        </p>
    </div>
</body>
</html>