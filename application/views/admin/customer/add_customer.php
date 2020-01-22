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
            
            <form action="<?php echo site_url('customer/save_customer');?>" method="get">
                <label for="namaCustomer">Nama Customer</label>
                <input name="nama_customer" type="text" id="namaCustomer"><br>
                <label for="alamat">Alamat</label>
                <input name="alamat_customer" type="text" id="alamat"><br>
                <label for="noHP">No HP</label>
                <input name="no_hp_customer" type="text" id="noHP"><br>
                <label for="status">Status Aktif</label><br>
                <input type="radio" name="status" value=true checked> Aktif
                <input type="radio" name="status" value=false> Tidak Aktif<br>
                <input type="submit" value="Simpan">
            </form>

        </div>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>

