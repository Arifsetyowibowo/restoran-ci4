<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Insert User</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
<?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger text-center" role="alert">';
        echo session()->getFlashdata('info');
        echo ' !!!';
        echo '</div>';
    }

    ?>
    <div class="animated fadeIn">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body card-block">
                    <form action="<?= base_url('/admin/user/insert') ?>" method="post">
                        <div class="form-group">
                            <label for="user">User</label>
                            <input type="text" class="form-control" name="user" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="user">Password</label>
                            <input type="password" class="form-control" name="password" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="level">Posisi</label>
                            <select class="form-control" name="level" id="level">
                                <?php foreach ($level as $key) : ?>
                                    <option value="<?php echo $key ?>"><?php echo $key ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" value="SIMPAN" name="simpan" class="btn btn-primary">Simpan</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?= $this->endSection() ?>