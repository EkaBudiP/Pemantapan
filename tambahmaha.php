<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="inputmaha.php" method="post">
        <div class="container col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <?php
                        include'koneksi.php';

                        $data = mysqli_query($conn,"select * from mhs");

                   
                    ?>
                    <div class="col">
                        Tambah Data
                    </div>
                   
                    <div class="form-group">
                    <input type="hidden" class="form-control bg-secondary text-dark" placeholder="Nama Prodi" name="id" id="">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control bg-secondary text-dark" placeholder="Nama" name="nama_mahasiswa" id="">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control bg-secondary text-dark" placeholder="NPM" name="npm" id="">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control bg-secondary text-dark" placeholder="Email" name="email" id="">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control bg-secondary text-dark" placeholder="Usia" name="usia" id="">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control bg-secondary text-dark" placeholder="Prodi" name="programstudi" id="">
                    </div>
                    <div class="modal-footer justify-content-between">
                    <a href="maha.php">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </a>
                
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
            </div>
                </div>
            </div>
        </div>
        </div>
    </form>

</body>
</html>