<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran ISE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function formvalidation(){
            
            var nrp = document.getElementById("nrp").value;
            var nama = document.getElementById("nama").value;
            var regexp = /^[A-Za-z\s]+$/;

            if (nrp.length == 0){
                Swal.fire({
                    title: "Pesan Kesalahan",
                    text: "NRP harus diisi !",
                    icon: "error"
                });
                document.getElementById("nrp").focus();
                return false;
            }
            if (nama.length == 0){
                Swal.fire({
                    title: "Pesan Kesalahan",
                    text: "Nama harus diisi !",
                    icon: "error"
                });
                document.getElementById("nama").focus();
                return false;
            }
            if (!regexp.test(nama)) {
                Swal.fire({
                    title: "Pesan Kesalahan",
                    text: "Nama harus A-Z !",
                    icon: "error"
                });
                document.getElementById("nama").focus();
                return false;
            }

            // if (nama == Number.parseInt(nrp)){
            //     return true;
            // } else {
            //     return false;
            // }

        }
    </script>
</head>
<body>
    <div class="container">
        <h3>Form Pendaftaran ISE</h3>
        <form id="formpendaftaran" action="https://google.co.id" method="get" onsubmit="return formvalidation();">
            NRP : <input type="text" name="" id="nrp" class="form-control" placeholder="Silahkan isi NRP, 10 Digit, Harus angka, Tidak boleh kosong" name="nrp">
            <br>
            Nama : <input type="text" name="" id="nama" class="form-control" placeholder="Silahkan isi Nama, minim 1 digit, Tidak boleh kosong" name="nama">
            <br>
            <input type="submit" class="btn btn-primary" value="Daftar">
        </form>
    </div>
</body>
</html>