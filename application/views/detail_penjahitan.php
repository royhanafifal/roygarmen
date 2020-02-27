<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    <style>
        .on-process{
            opacity: 0.35;
        }
    </style>
    <title>Detail Penjahitan</title>
</head>
<body class="container">
    <h2>Proses Penjahitan</h2>

    <h5><a href="<?php echo site_url('home');?>">Home</a></h5>

    <?php foreach($detail as $penjahitan) { ?>
        <table class="table table-borderless">
        <tbody>
            <tr>
                <th scope="row">Id Order</th>
                <td>:</td>
                <td><?=$penjahitan->id_order?></td>
            </tr>
            <tr>
                <th scope="row">Foto</th>
                <td>:</td>
                <td><img src="<?php echo base_url().'assets/images/'.$penjahitan->foto ?>" class="img-responsive" alt="Foto penjahitan"></td>
            </tr>
            <tr>
                <th scope="row">Keterangan</th>
                <td>:</td>
                <td><?=$penjahitan->keterangan?></td>
            </tr>
            <tr>
                <th scope="row">Status</th>
                <td>:</td>
                <td><?= $penjahitan->status==null ? 'Belum Selesai' : 'Telah Selesai' ?></td>
            </tr> 

        </tbody>
        </table>
    <?php } ?>


</body>
</html>