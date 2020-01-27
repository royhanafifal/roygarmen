<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
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

        <!-- Page Content  -->
        <div id="content">

            <?php $this->load->view("admin/_partials/navbar.php") ?>

            <h3>Edit Data Order</h3>
            <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
            
            <form action="<?php echo base_url('admin/update_order');?>" method="get">
                <label for="orderKode">Kode Order (Kolom ini bersifat unique, tidak bisa diubah)</label>
                <input name="id_order" type="text" id="orderKode" value="<?php echo $id_order;?>" readonly><br>
                <label for="namaPemesan">Nama Pemesan</label>
                <input name="nama_customer" type="text" id="namaCustomer" value="<?php echo $nama_customer;?>" readonly><br>
                <label for="namaOrder">Nama Order</label>
                <input name="nama_order" type="text" id="namaOrder" value="<?php echo $nama_order;?>"><br>
                <label for="proses1">Proses 1</label><br>
                <?php 
                    switch ($proses_1) {
                        case 0:
                            echo '<input type="radio" name="proses1" value=0 checked> Belum Dikerjakan
                            <input type="radio" name="proses1" value=1> Sedang Proses
                            <input type="radio" name="proses1" value=2> Selesai<br>';
                        break;
                        case 1:
                            echo '<input type="radio" name="proses1" value=0> Belum Dikerjakan
                            <input type="radio" name="proses1" value=1 checked> Sedang Proses
                            <input type="radio" name="proses1" value=2> Selesai<br>';
                        break;
                        case 2:
                            echo '<input type="radio" name="proses1" value=0> Belum Dikerjakan
                            <input type="radio" name="proses1" value=1> Sedang Proses
                            <input type="radio" name="proses1" value=2 checked> Selesai<br>';
                        break;
                    }
                ?>  
                <label for="proses2">Proses 2</label><br>
                <?php 
                    switch ($proses_2) {
                        case 0:
                            echo '<input type="radio" name="proses2" value=0 checked> Belum Dikerjakan
                            <input type="radio" name="proses2" value=1> Sedang Proses
                            <input type="radio" name="proses2" value=2> Selesai<br>';
                        break;
                        case 1:
                            echo '<input type="radio" name="proses2" value=0> Belum Dikerjakan
                            <input type="radio" name="proses2" value=1 checked> Sedang Proses
                            <input type="radio" name="proses2" value=2> Selesai<br>';
                        break;
                        case 2:
                            echo '<input type="radio" name="proses2" value=0> Belum Dikerjakan
                            <input type="radio" name="proses2" value=1> Sedang Proses
                            <input type="radio" name="proses2" value=2 checked> Selesai<br>';
                        break;
                    }
                ?>
                <label for="proses3">Proses 3</label><br>
                <?php 
                    switch ($proses_3) {
                        case 0:
                            echo '<input type="radio" name="proses3" value=0 checked> Belum Dikerjakan
                            <input type="radio" name="proses3" value=1> Sedang Proses
                            <input type="radio" name="proses3" value=2> Selesai<br>';
                        break;
                        case 1:
                            echo '<input type="radio" name="proses3" value=0> Belum Dikerjakan
                            <input type="radio" name="proses3" value=1 checked> Sedang Proses
                            <input type="radio" name="proses3" value=2> Selesai<br>';
                        break;
                        case 2:
                            echo '<input type="radio" name="proses3" value=0> Belum Dikerjakan
                            <input type="radio" name="proses3" value=1> Sedang Proses
                            <input type="radio" name="proses3" value=2 checked> Selesai<br>';
                        break;
                    }
                ?>    
                <input type="submit" value="Simpan Perubahan">
            </form>

        </div>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>

