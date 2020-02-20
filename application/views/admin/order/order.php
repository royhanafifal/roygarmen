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

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Order Kode</th>
                    <th scope="col">Tanggal Pemesanan</th>
                    <th scope="col">Id Pemesan</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Nama Order</th>
                    <th scope="col">Pemotongan</th>
                    <th scope="col">Sablon / Bordir</th>
                    <th scope="col">Penjahitan</th>
                    <th scope="col">Finishing</th>
                    <th scope="col">Tanggal Selesai</th>
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
                        <td><?php echo $order->id_customer ?></td>
                        <td><?php echo $order->nama_customer ?></td>
                        <td><?php echo $order->nama_order ?></td>
                        <td>
                            <a href="<?php echo site_url('proses/get_edit_pemotongan/'.$order->id_order);?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="<?php echo site_url('proses/get_edit_sablon/'.$order->id_order);?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="<?php echo site_url('proses/get_edit_penjahitan/'.$order->id_order);?>" class="btn btn-primary">Edit</a>   
                        </td>
                        <td>
                            <a href="<?php echo site_url('proses/get_edit_finishing/'.$order->id_order);?>" class="btn btn-primary">Edit</a>   
                        </td>
                        <td><?php echo $order->tanggal_selesai_order ?></td>
                        <td>
                                <a href="<?php echo site_url('admin/get_edit_order/'.$order->id_order);?>" class="btn btn-warning">Edit</a>
                                <a href="<?php echo site_url('admin/delete_order/'.$order->id_order);?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                    <?php }  ?>
                </tbody>
            </table>
            <div class="line"></div>

        </div>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>

</body>



</html>

