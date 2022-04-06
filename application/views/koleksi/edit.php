<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <title>Edit Buku</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Buku</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form action="<?php echo base_url('koleksi/update/' . $detail['id']) ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Judul </label>
                                        <input type="text" name="judul" class="form-control" id="judul" value="<?php echo $detail['judul'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="penulis" class="form-label">Penulis</label>
                                        <input type="text" name="penulis" class="form-control" id="penulis" value="<?php echo $detail['penulis'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="penerbit" class="form-label">Penerbit</label>
                                        <input type="text" name="penerbit" class="form-control" id="penerbit" value="<?php echo $detail['penerbit'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="sinopsis" class="form-label">Sinopsis</label>
                                        <textarea name="sinopsis" class="form-control" id="sinopsis"><?php echo $detail['sinopsis'] ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="cover" class="form-label">Cover</label>
                                        <input type="file" name="cover" class="form-control" id="cover">
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