<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<?php

if (isset($_GET['page_page'])) {
    $page = $_GET['page_page'];
    $jumlahisi = 5;
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
                        <h1>Data Rincian Order</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <form action="<?= base_url('/admin/orderdetail/cari') ?>" method="post">
                            <div class="form-group col-6 float-left">
                                <label for="Tglawal">Tgl Awal</label>
                                <input type="date" class="form-control" name="awal" id="" required>
                            </div>
                            <div class="form-group col-6 float-left">
                                <label for="Tglakhir">Tgl Akhir</label>
                                <input type="date" class="form-control" name="akhir" id="" required>
                            </div>
                            <button type="submit" value="CARI" name="cari" class="btn btn-primary mr-3" style="float: right;">Simpan</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Menu</th>
                                    <th>Tgl Order</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php foreach ($orderdetail as  $value) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value['menu']; ?></td>
                                        <td><?php echo $value['tglorder']; ?></td>
                                        <td><?php echo $value['harga']; ?></td>
                                        <td><?php echo $value['jumlah']; ?></td>
                                        <td><?php echo $value['jumlah'] * $value['harga']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>