<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?= $judul ?></h1>
                    </div>
                </div>
                
            </div>
            <div class="col mt-3">
                <p>Pelanggan : <?= $order[0]['pelanggan']; ?></p>
            </div>
            <div class="col mt-3">
                <p>Tgl Order : <?= date("d-m-Y", strtotime($order[0]['tglorder'])); ?></p>
            </div>
            <div class="col mt-3">
                <p>Total : <?= 'Rp. ' . number_format($order[0]['total']); ?></p>
            </div>
            
        </div>
    </div>
</div>
<div class="row">

</div>
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            
            <div class="col-md-12">
                <?php
                if (!empty(session()->getFlashdata('info'))) {
                    echo '<div class="alert alert-danger text-center" role="alert">';
                    echo session()->getFlashdata('info');

                    echo '</div>';
                }

                ?>
                <form action="<?= base_url() ?>/admin/order/update" method="post">
                    <div class="form-group">
                        <label for="bayar">Bayar</label>
                        <input type="number" class="form-control" name="bayar" id="" required>
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" name="total" value="<?= $order[0]['total'] ?>" id="" required>
                        <input type="hidden" class="form-control" name="idorder" value="<?= $order[0]['idorder'] ?>" id="" required>

                    </div>
                    <button type="submit" value="SIMPAN" name="simpan" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Rincian Order</h1>
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
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Order</th>
                                    <th>Pelanggan</th>
                                    <th>Tanggal</th>
                                    <th>Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($detail as $value) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value['menu']; ?></td>
                                        <td><?php echo $value['hargajual']; ?></td>
                                        <td><?php echo $value['jumlah']; ?></td>
                                        <td><?php echo $value['jumlah'] *  $value['hargajual']; ?></td>

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