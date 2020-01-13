<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Order</title>
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
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 40px;
        }
    </style>
</head>
<body class="container">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <h3>Edit Data Order</h3>
    <form action="<?php echo site_url('admin/update_order');?>" method="get">
        <label for="orderKode">Kode Order</label>
		<input name="id_order" type="text" id="orderKode" value="<?php echo $id_order;?>"><br>
        <label for="namaPemesan">Nama Pemesan</label>
		<input name="nama_pemesan" type="text" id="namaPemesan" value="<?php echo $nama_pemesan;?>"><br>
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
</body>
</html>