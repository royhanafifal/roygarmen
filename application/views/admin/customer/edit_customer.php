<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #3399ff;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #3399ff;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <!-- Page Content  -->
        <div id="content">

            <?php $this->load->view("admin/_partials/navbar.php") ?>

            <h3>Edit Data Customer</h3>
            <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
            
            <form action="<?php echo site_url('customer/update_customer');?>" method="get">
                <label for="idCustomer">Id Customer (Kolom ini bersifat unique, tidak bisa diubah)</label>
                <input name="id_customer" type="text" id="idCustomer" value="<?php echo $id_customer;?>" readonly><br>
                <label for="namaCustomer">Nama Customer</label>
                <input name="nama_customer" type="text" id="namaCustomer" value="<?php echo $nama_customer;?>"><br>
                <label for="alamat">Alamat</label>
                <input name="alamat_customer" type="text" id="alamat" value="<?php echo $alamat_customer;?>"><br>
                <label for="noHP">No HP</label>
                <input name="no_hp_customer" type="text" id="noHP" value="<?php echo $no_hp_customer;?>"><br>
                <label for="status">Status Aktif</label><br>
                <?php if($status_aktif){
                    echo'<input type="radio" name="status_aktif" value="1" checked> Aktif
                    <input type="radio" name="status_aktif" value="0"> Tidak Aktif<br>';
                }else{
                    echo'<input type="radio" name="status_aktif" value="1"> Aktif
                    <input type="radio" name="status_aktif" value="0" checked> Tidak Aktif<br>';
                } ?>
                
                <input type="submit" value="Simpan Perubahan">
            </form>

        </div>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>

