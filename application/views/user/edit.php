<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <title>Edit User</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit User</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form action="<?php echo base_url('User/update/' . $detail['id']) ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama </label>
                                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $detail['nama'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email </label>
                                        <input type="text" name="email" class="form-control" id="email" value="<?php echo $detail['email'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password </label>
                                        <input type="text" name="password" class="form-control" id="password" value="<?php echo $detail['password'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat </label>
                                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $detail['alamat'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="telepon" class="form-label">Telepon </label>
                                        <input type="text" name="telepon" class="form-control" id="telepon" value="<?php echo $detail['telepon'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="profile" class="form-label">Profile</label>
                                        <input type="file" name="profile" class="form-control" id="profile">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo base_url('assets/css/bootstrap.min.js'); ?>" crossorigin="anonymous"></script>

</html>