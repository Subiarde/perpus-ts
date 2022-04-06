<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <title>Koleksi Buku</title>
</head>



<body>
    <h1 class="text-center">Koleksi Buku</h1>

    <div class="container">
        <div class="col-12">
            <a href="koleksi/add" class="btn btn-success">Tambah Data</a>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Judul</th>
                        <th style="width:20%;">Aksi</th>
                    </tr>
                </thead>
                <?php
                foreach ($list as $item) : {
                ?>
                        <tr>
                            <td><?php echo $item['id'] ?></td>
                            <td><?php echo $item['judul'] ?></td>
                            <td class="d-grid gap-2 d-md-flex justify-content-md-end"><a href="koleksi/detail/<?php echo $item['id']; ?>" class='btn btn-primary'>Detail</a>
                                <a href="koleksi/edit/<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="koleksi/delete/<?php echo $item['id']; ?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')" class="btn btn-danger">Hapus</a>
                            </td>

                        </tr>
                <?php }
                endforeach; ?>
            </table>
        </div>
    </div>
</body>


</html>