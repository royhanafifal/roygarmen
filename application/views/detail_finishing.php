<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    <title>Detail Finishing</title>
</head>
<body class="container">
    <h2>Proses Finishing</h2>

    <h5><a href="<?php echo site_url('home');?>">Home</a></h5>

    <?php foreach($detail as $finishing) { ?>
        <table class="table table-borderless">
        <tbody>
            <tr>
                <th scope="row">Id Order</th>
                <td>:</td>
                <td><?=$finishing->id_order?></td>
            </tr>
            <tr>
                <th scope="row">Foto</th>
                <td>:</td>
                <td><img src="<?php echo base_url().'assets/images/'.$finishing->foto ?>" class="img-responsive" alt="Foto finishing"></td>
            </tr>
            <tr>
                <th scope="row">Keterangan</th>
                <td>:</td>
                <td><?=$finishing->keterangan?></td>
            </tr>
            <tr>
                <th scope="row">Status</th>
                <td>:</td>
                <td><?= $finishing->status==null ? 'Belum Selesai' : 'Telah Selesai' ?></td>
            </tr> 

        </tbody>
        </table>
    <?php } ?>


</body>
</html>