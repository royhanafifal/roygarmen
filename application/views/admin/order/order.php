<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <!-- Page Content  -->
        <div id="content">

            <?php $this->load->view("admin/_partials/navbar.php") ?>

            <h2>Order Status</h2>
            <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

            <style type="text/css">
                .status{width: 20px; height: 20px; float: left;}
            </style>
            <br>
            <form action="<?php echo site_url('admin/add_order');?>"><button class="button button2">Tambahkan Data</button></form>

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
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($order_status) { ?> 
                    <?php $no = 1; foreach($order_status as $order) { ?>
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
                        <td>
                                <a href="<?php echo site_url('admin/get_edit_order/'.$order->id_order);?>">Edit</a> | 
                                <a href="<?php echo site_url('admin/delete_order/'.$order->id_order);?>">Hapus</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                    <?php }  ?>
                </tbody>
            </table>
            <div class="line"></div>
            <h4>Keterangan</h4>
            <ul style="list-style-type:none">
                <li><div class="rounded-circle bg-danger status"></div>&nbsp;Proses Belum Dilakukan</li>
                <li><div class="rounded-circle bg-primary status"></div>&nbsp;Proses Sedang Dikerjakan</li>
                <li><div class="rounded-circle bg-success status"></div>&nbsp;Proses Telah Selesai</li>
            </ul>

        </div>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>

