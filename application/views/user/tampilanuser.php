<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <title>User</title>
</head>

<body>
    <h1 class="text-center">Daftar User</h1>
    <div class="container">
        <a href="user/add" class="btn btn-success">Tambah User</a>
        <div class="col-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID User</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th style="width:20%;">Aksi</th>
                    </tr>
                </thead>
                <?php
                foreach ($list as $i) : {
                ?>
                        <tr>
                            <td><?php echo $i['id'] ?></td>
                            <td><?php echo $i['nama'] ?></td>
                            <td><?php echo $i['email'] ?></td>
                            <td><?php echo $i['alamat'] ?></td>
                            <td><?php echo $i['telepon'] ?></td>
                            <td class="d-grid gap-2 d-md-flex justify-content-md-end"><a href="user/detail/<?php echo $i['id']; ?>" class='btn btn-primary'>Detail</a>
                                <a href="user/edit/<?php echo $i['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="user/delete/<?php echo $i['id']; ?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                <?php }
                endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>