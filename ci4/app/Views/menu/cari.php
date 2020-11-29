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
                        <h1>Menu</h1>
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
                        <div class="col-md-4 mt-2" style="float:left;">
                            <form action="<?= base_url('/admin/menu/read') ?>" method="get">
                            <?= view_cell('\App\Controllers\Admin\Menu::option') ?>
                        </form>
                        </div>
                        
                        <a href="<?= base_url('/admin/menu/create') ?>" class="btn btn-primary mt-2" style="float: right;">Tambah Menu</a>
                    </div>
                    <div>

                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Harga</th>
                                    <th>Harga</th>
                                    <th colspan="2" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($menu as $key => $value) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>       
                                        <td ><img style="width:70px" src="<?= base_url('/uploud/' . $value['gambar'] . '') ?>" alt=""></td>
                                        <td><?php echo $value['menu']; ?></td>
                                        <td>Rp. <?php echo number_format($value['harga']); ?></td>
                                        <td class="text-center"><a href="<?= base_url() ?>/admin/menu/delete/<?php echo $value['idmenu']; ?>"><img src="<?= base_url('icon/trash.svg') ?>" alt=""></a></td>
                                        <td class="text-center"><a href="<?= base_url() ?>/admin/menu/find/<?php echo $value['idmenu']; ?>"><img src="<?= base_url('icon/pencil.svg') ?>" alt=""></a></td>
                                    </tr>
                                <?php endforeach; ?>
                        </table>
                        <?= $pager->makeLinks(1,$tampil,$total,'template') ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>



<?= $this->endSection() ?>