<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    <style>
        .on-process{
            opacity: 0.35;
        }
    </style>
    <title>Hasil Pencarian</title>
</head>
<body class="container">
    <h2>Hasil Pencarian RoyGarmen</h2>

    <h5><a href="<?php echo site_url('home');?>">Kembali</a></h5>

    <?php foreach($order_pencarian as $cari) { ?>
        <table class="table table-borderless">
        <tbody>
            <tr>
                <th scope="row">Id Order</th>
                <td>:</td>
                <td><?=$cari->id_order?></td>
            </tr>
            <tr>
                <th scope="row">Tanggal Order</th>
                <td>:</td>
                <td><?=$cari->tanggal_order?></td>
            </tr>
            <tr>
                <th scope="row">Tanggal Target Selesai</th>
                <td>:</td>
                <td><?=$cari->tanggal_selesai_order?></td>
            </tr>
            <tr>
                <th scope="row">Nama Customer</th>
                <td>:</td>
                <td><?=$cari->nama_customer?></td>
            </tr> 
            <tr>
                <th scope="row">Nama Order</th>
                    <td>:</td>
                    <td>
                        <?=$cari->nama_order?>
                    </td>
            </tr>
        </tbody>
        </table>
        
        <table>
            <tr>
                <td>
                    <?php foreach($status_pemotongan as $pemotongan) { ?>
                        <a href="<?php echo site_url('DetailProses/pemotongan/'.$cari->id_order);?>">
                        <img src="<?php echo base_url().'assets/images/proses-icon/pemotongan.svg' ?>" class="<?= $pemotongan->status==null ? 'rounded mx-auto d-block on-process' : 'rounded mx-auto d-block' ?>" alt="Pemotongan">
                        </a>
                    <?php } ?>
                </td>
                <td><img src="<?php echo base_url().'assets/images/proses-icon/next.png' ?>" class="" alt="Next"></td>
                <td>
                    <?php foreach($status_sablon as $sablon) { ?>
                        <img src="<?php echo base_url().'assets/images/proses-icon/sablon.svg' ?>" class="<?= $sablon->status==null ? 'rounded mx-auto d-block on-process' : 'rounded mx-auto d-block' ?>" alt="Pemotongan">
                    <?php } ?>
                </td>
                <td><img src="<?php echo base_url().'assets/images/proses-icon/next.png' ?>" class="rounded mx-auto d-block" alt="Next"></td>
                <td>
                    <?php foreach($status_penjahitan as $penjahitan) { ?>
                        <img src="<?php echo base_url().'assets/images/proses-icon/penjahitan.svg' ?>" class="<?= $penjahitan->status==null ? 'rounded mx-auto d-block on-process' : 'rounded mx-auto d-block' ?>" alt="Pemotongan">
                    <?php } ?>
                </td>
                <td><img src="<?php echo base_url().'assets/images/proses-icon/next.png' ?>" class="rounded mx-auto d-block" alt="Next"></td>
                <td>
                    <?php foreach($status_finishing as $finishing) { ?>
                        <img src="<?php echo base_url().'assets/images/proses-icon/finishing.svg' ?>" class="<?= $finishing->status==null ? 'rounded mx-auto d-block on-process' : 'rounded mx-auto d-block' ?>" alt="Pemotongan">
                    <?php } ?>
                </td>
            </tr>
        </table>
    <?php } ?>


</body>
</html>