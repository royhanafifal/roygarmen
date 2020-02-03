<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body>
    <div class="wrapper">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content">
        <?php $this->load->view("admin/_partials/navbar.php") ?>

        <h3>Proses Sablon / Bordir</h3>
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
        <form action="<?php echo base_url('proses/save_sablon');?>" method="post" enctype="multipart/form-data">
            <input type="text" hidden value="<?=$id_order ?>" name="id_order">
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="status" class="custom-control-input" value="1">
                <label class="custom-control-label" for="customRadio1">Sedang Dilakukan</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="status" class="custom-control-input" value="2">
                <label class="custom-control-label" for="customRadio2">Selesai</label>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="foto" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback">Foto Proses</div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Keterangan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
            
        </form>

        </div>
    </div>
    <?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>