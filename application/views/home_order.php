<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Pencarian</title>
</head>
<body class="container">
    <h2>Hasil Pencarian RoyGarmen</h2>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        .status{width: 20px; height: 20px; float: left;}
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
    <br>
    <h5><a href="<?php echo site_url('home');?>">Kembali</a></h5>

    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Order Kode</th>
            <th scope="col">Tanggal Pemesanan</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Nama Order</th>
            <th scope="col">Proses 1</th>
            <th scope="col">Proses 2</th>
            <th scope="col">Proses 3</th>
            </tr>
        </thead>
        <tbody>
            <?php if($order_pencarian) { ?> 
            <?php $no = 1; foreach($order_pencarian as $order) { ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $order->id_order ?></td>
                <td><?php echo $order->tanggal_order ?></td>
                <td><?php echo $order->nama_pemesan ?></td>
                <td><?php echo $order->nama_order ?></td>
                <td>
                    <?php 
                        switch ($order->proses_1) {
                            case 0:
                                    echo '<div class="p-2 d-inline-block rounded-circle bg-danger"></div>';
                            break;

                            case 1:
                                echo '<div class="p-2 d-inline-block rounded-circle bg-primary"></div>';
                            break;
                            
                            case 2:
                                    echo '<div class="p-2 d-inline-block rounded-circle bg-success"></div>';
                            break;
                        }
                    ?>    
                </td>
                <td>
                    <?php 
                        switch ($order->proses_2) {
                            case 0:
                                echo '<div class="p-2 d-inline-block rounded-circle bg-danger"></div>';
                            break;

                            case 1:
                                echo '<div class="p-2 d-inline-block rounded-circle bg-primary"></div>';
                            break;
                            
                            case 2:
                                    echo '<div class="p-2 d-inline-block rounded-circle bg-success"></div>';
                            break;
                        }
                    ?>    
                </td>
                <td>
                    <?php 
                        switch ($order->proses_3) {
                            case 0:
                                echo '<div class="p-2 d-inline-block rounded-circle bg-danger"></div>';
                            break;

                            case 1:
                                echo '<div class="p-2 d-inline-block rounded-circle bg-primary"></div>';
                            break;
                            
                            case 2:
                                    echo '<div class="p-2 d-inline-block rounded-circle bg-success"></div>';
                            break;
                        }
                    ?>    
                </td>
            </tr>
            <?php $no++; } ?>
            <?php }  ?>
        </tbody>
    </table>
    <h4>Keterangan</h4>
    <ul style="list-style-type:none">
        <li><div class="rounded-circle bg-danger status"></div>&nbsp;Proses Belum Dilakukan</li>
        <li><div class="rounded-circle bg-primary status"></div>&nbsp;Proses Sedang Dikerjakan</li>
        <li><div class="rounded-circle bg-success status"></div>&nbsp;Proses Telah Selesai</li>
    </ul>
</body>
</html>