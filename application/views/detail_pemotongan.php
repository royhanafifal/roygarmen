<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    <style>
        .on-process{
            opacity: 0.35;
        }
    </style>
    <title>Detail Pemotongan</title>
</head>
<body class="container">
    <h2>Proses Pemotongan</h2>

    <h5><a href="<?php echo site_url('home');?>">Home</a></h5>

    <?php foreach($detail as $pemotongan) { ?>
        <table class="table table-borderless">
        <tbody>
            <tr>
                <th scope="row">Id Order</th>
                <td>:</td>
                <td><?=$pemotongan->id_order?></td>
            </tr>
            <tr>
                <th scope="row">Foto</th>
                <td>:</td>
                <td><img src="<?php echo base_url().'assets/images/'.$pemotongan->foto ?>" class="img-responsive" alt="Foto Pemotongan"></td>
            </tr>
            <tr>
                <th scope="row">Keterangan</th>
                <td>:</td>
                <td><?=$pemotongan->keterangan?></td>
            </tr>
            <tr>
                <th scope="row">Status</th>
                <td>:</td>
                <td><?= $pemotongan->status==null ? 'Belum Selesai' : 'Telah Selesai' ?></td>
            </tr> 

        </tbody>
        </table>
    <?php } ?>


</body>
</html>