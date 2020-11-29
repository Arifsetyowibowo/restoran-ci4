<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $jumlahisi = 4;
    $no = ($jumlahisi * $page) - $jumlahisi + 1;
} else {
    $no = 1;
}


?>



<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Order</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                       
                    </div>
                    <div>

                    </div>
                    <div class="card-body">
                        <table  class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Order</th>
                                    <th>Pelanggan</th>
                                    <th>Tanggal</th>
                                    <th>Total</th>
                                    <th>Bayar</th>
                                    <th>Kembali</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($order as $value) : ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value['idorder']; ?></td>
                                        <td><?php echo $value['pelanggan']; ?></td>
                                        <td><?php echo $value['tglorder']; ?></td>
                                        <td><?php echo $value['total']; ?></td>
                                        <td><?php echo $value['bayar']; ?></td>
                                        <td><?php echo $value['kembali']; ?></td>

                                        <?php
                                        if ($value['status']) {
                                            $status = "LUNAS";
                                        } else {
                                            $status = "<a href='" . base_url('/admin/order/find') . '/' . $value['idorder'] . "' class='btn btn-primary' >BAYAR</a>";
                                        }

                                        ?>
                                        <td><?php echo $status; ?></td>

                                    </tr>
                                <?php endforeach; ?>
                        </table>
                        <?= $pager->makeLinks(1, $perPage, $total, 'template') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>