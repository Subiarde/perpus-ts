<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <title>Perpustakaan Tiga Serangkai</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Selamat Pagi<?= $nama; ?></h1>
                    </div>
                    <div class="card-body">
                        <h5 class="card-text">Alamat :<?= $alamat; ?></h5>
                        <h5 class="card-text">Email :<?= $email; ?></h5>
                        <h5 class="card-text">Hobi :
                            <ul>
                                <?php foreach ($hobi as $i) { ?>
                                    <li> <?php echo $i ?> </li>
                                <?php   } ?>
                            </ul>
                        </h5>
                        <p>Jangan Lupa Bersyukur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


</body>

</html>