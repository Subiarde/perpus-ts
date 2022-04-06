<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <title>Detail Buku</title>
</head>


<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Detail Buku</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Judul <?php echo $detail['judul'] ?></h4>
                                <h6>Penulis :<?php echo $detail['penulis'] ?></h6>
                                <h6>Penerbit :<?php echo $detail['penerbit'] ?></h6>
                                <h6>Sinopsis :<?php echo $detail['sinopsis'] ?></h6>
                            </div>
                            <div class="col-4">
                                <img style="width:150px" src="<?php echo base_url('assets/img/cover/' . $detail['cover']) ?>" alt="">
                            </div>
                        </div>
                        <a href="<?= base_url('koleksi'); ?>" class="btn btn-danger btn-md">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>


</html>