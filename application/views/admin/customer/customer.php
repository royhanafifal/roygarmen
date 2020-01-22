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

            <h2>Data Customer</h2>
            <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

            <form action="<?php echo site_url('customer/add_customer');?>"><button class="button button2">Tambahkan Customer</button></form>

            <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Customer</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($customer) { ?> 
                        <?php $no = 1; foreach($customer as $data) { ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $data->id_customer ?></td>
                            <td><?php echo $data->nama_customer ?></td>
                            <td><?php echo $data->alamat_customer ?></td>
                            <td><?php echo $data->no_hp_customer ?></td>
                            <td><?php 
                                    if($data->status_aktif)
                                        echo "Aktif";
                                    else echo "Tidak Aktif"; ?></td>
                            <td>
                                    <a href="<?php echo site_url('customer/get_edit_customer/'.$data->id_customer);?>">Edit</a> | 
                                    <a href="<?php echo site_url('customer/delete_customer/'.$data->id_customer);?>">Hapus</a>
                            </td>
                        </tr>
                        <?php $no++; } ?>
                        <?php }  ?>
                    </tbody>
                </table>

        </div>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>

