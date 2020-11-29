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
                        <h1>User</h1>
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

                        <a href="<?= base_url('/admin/user/create') ?>" class="btn btn-primary" style="float: right;">Tambah User</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                    <th colspan="2" class="text-center">Aksi</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php foreach ($user as $key => $value) : ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value['user']; ?></td>
                                        <td><?php echo $value['email']; ?></td>
                                        <td><?php echo $value['level']; ?></td>
                                        <?php
                                        if ($value['aktif'] == 1) {
                                            $aktif = 'AKTIF';
                                        } else {
                                            $aktif = 'BANNED';
                                        }
                                        ?>
                                        <td><a href="<?= base_url() ?>/admin/user/update/<?php echo $value['iduser']; ?>/<?php echo $value['aktif']; ?>"><?= $aktif ?></a></td>
                                        <td class="text-center"><a href="<?= base_url() ?>/admin/user/delete/<?php echo $value['iduser']; ?>"><img src="<?= base_url('icon/trash.svg') ?>" alt=""></a></td>
                                        <td class="text-center"><a href="<?= base_url() ?>/admin/user/find/<?php echo $value['iduser']; ?>"><img src="<?= base_url('icon/pencil.svg') ?>" alt=""></a></td>
                                    </tr>
                                <?php endforeach; ?>
                        </table>
                        <?= $pager->links('page', 'template') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>