<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    <title>Home RoyGarmen</title>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 20px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 2px solid #85e0e0;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .container{
            padding: 30px;
        }

    </style>
</head>
<body class="container">
    <h2>Tracking Order</h2>

    <form action="<?php echo site_url('home/search')?>" action="get">
        <input name="id_order" type="text" placeholder="Masukkan Kode Pesananmu Disini">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Cek Pesanan</button>
    </form>
</body>
</html>