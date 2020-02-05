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

        <h3>Proses Pemotongan</h3>
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

        <?php if($id_order){?>
            <form action="<?php echo base_url('proses/update_pemotongan');?>" method="get" enctype="multipart/form-data">
                <input type="text"  value="<?=$id_order ?>" name="id_order">
                <input type="text"  value="<?=$id_proses ?>" name="id_proses">
                <input type="text"  value="<?=$foto ?>" name="foto">
                <?php
                    switch ($status){
                        case 0:
                            echo '<div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="status" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="customRadio1">Sedang Dilakukan</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="status" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="customRadio2">Selesai</label>
                                </div>';
                        break;
                        case 1:
                            echo '<div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="status" class="custom-control-input" value="1" checked>
                                    <label class="custom-control-label" for="customRadio1">Sedang Dilakukan</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="status" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="customRadio2">Selesai</label>
                                </div>';
                        break;
                        case 2:
                            echo '<div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="status" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="customRadio1">Sedang Dilakukan</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="status" class="custom-control-input" value="2" checked>
                                    <label class="custom-control-label" for="customRadio2">Selesai</label>
                                </div>';
                        break;
                    }
                
                ?>
                <br>
                <img src="<?php echo base_url().'assets/images/'.$foto ?>" class="img-responsive" alt="Foto Pemotongan">
                <br><br>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="foto" value="<?=$foto ?>">
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Foto Proses</div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Keterangan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"><?=$keterangan ?></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>

        <?php }else{ ?>
            <form action="<?php echo base_url('proses/save_pemotongan');?>" method="post" enctype="multipart/form-data">
            <input type="text" hidden value="<?=$this->uri->segment(3) ?>" name="id_order">
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
        <?php }?>
        
        </div>
    </div>


    <?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>