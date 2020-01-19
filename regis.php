<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Peserta</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <form action="prosesregis.php" method="POST">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input class="form-control" type="text" name="name" placeholder="Masukkan Nama Peserta" />
            </div>

            <!-- <div class="form-group">
                <label for="nis">NIS</label>
                <input class="form-control" type="text" name="nis" placeholder="Nis" />
            </div> -->

            <div class="form-group">
                <label for="No HP">No HP</label>
                <input class="form-control" type="text" name="nohp" placeholder="Masukkan No HP" />
            </div>
            
            <!-- <div class="form-grup">
                <label for="file">File</label>
                <input class="form-control" type="file" name="file">
            </div> -->
            <br>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Submit" />

        </form>
            
        </div>

    </div>
</div>

</body>
</html>