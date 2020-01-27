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

            <h3>Edit Data Order</h3>
            <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
            
            <form action="<?php echo site_url('admin/save_order');?>" method="get">
                <label for="namaPemesan">Nama Pemesan</label>
                <input name="nama_pemesan" type="text" id="namaPemesan"><br>
                <label for="alamatPemesan">Alamat Pemesan</label>
                <input name="alamat_pemesan" type="text" id="alamatPemesan"><br>
                <label for="noHpPemesan">No HP Pemesan</label>
                <input name="no_hp_pemesan" type="text" id="noHpPemesan"><br>

                <div class="line"></div>

                <label for="namaOrder">Nama Order</label>
                <input name="nama_order" type="text" id="namaOrder"><br>
                <label for="tanggalSelesai">Tanggal Selesai</label><br>
                <input name="tanggal_selesai_order" type="date" id="tanggalSelesai"><br><br>
                <label for="proses1">Proses 1</label><br>
                <input type="radio" name="proses1" value=0 checked> Belum Dikerjakan
                <input type="radio" name="proses1" value=1> Sedang Proses
                <input type="radio" name="proses1" value=2> Selesai<br>
                <label for="proses1">Proses 2</label><br>
                <input type="radio" name="proses2" value=0 checked> Belum Dikerjakan
                <input type="radio" name="proses2" value=1> Sedang Proses
                <input type="radio" name="proses2" value=2> Selesai<br>
                <label for="proses1">Proses 3</label><br>
                <input type="radio" name="proses3" value=0 checked> Belum Dikerjakan
                <input type="radio" name="proses3" value=1> Sedang Proses
                <input type="radio" name="proses3" value=2> Selesai<br>
                <input type="submit" value="Simpan">
            </form>

        </div>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>

