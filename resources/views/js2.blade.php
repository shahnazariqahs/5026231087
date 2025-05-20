<html>

    <head>

        <title>

        </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            
            // function dibuat agar tidak langsung di load waktu web dibuka tapi sesuai kebutuhan(kalo dipanggil)
            // execute js ada di console, klo kosong artinya ga eror
            function validasi()
            {
                var nrp= document.getElementById("nrp").value;
                var nama= document.getElementById("nama").value;
                
                if (nrp.length == 0){
                    //alert ("NRP harus diisi");
                    swal("Pesan", "NRP harus diisi", "error");
                    document.getElementById("nrp").focus();
                    return false;
                }

                if (nama.length ==0){
                    //alert ("Nama harus diisi");
                    swal("Pesan", "Nama harus diisi", "error");
                    document.getElementById("nama").focus();
                    return false;

                }

                if(isNaN(nrp)){
                    swal("Pesan", "NRP harus angka", "error");
                    document.getElementById("nrp").focus();
                    return false;
                }
                
                // default return true

            }


        </script>

    </head>

    <body>
        <div class="container">
            <p>
                <!-- action : url dimana form diolah 
                 jika pake get akan muncul apa yg diisikan diatas. di link url atas, seperti https://www.google.co.id/?nrp=24242&nama=sdfsf-->
                <form id="frmDftr" method="get" action="https://google.co.id" onsubmit="return validasi();">
                NRP :
                <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Isikan 10 digit NRP, harus diisi" >
                <br>

                Nama :
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan nama, harus diisi" >

                <br>
                <!-- digunakan kalau ingin inout ke server yg onsubmit, klo di halaman aja onclick -->
                <input type="submit" class="btn btn-success" value="Daftar">
                </form>
            </p>
        </div>
    </body>

</html>