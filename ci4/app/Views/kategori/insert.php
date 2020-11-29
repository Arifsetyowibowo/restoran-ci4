<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Insert Kategori</h1>
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
   
        echo '</div>';
    }
    
    ?>
    <div class="animated fadeIn">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body card-block">
                    <form action="<?= base_url('/admin/kategori/insert') ?>" method="post" class="">
                        <div class="form-group"><label class=" form-control-label">Nama Kategori</label>
                            <input type="text" name="kategori" placeholder="Masukkan Kategori" class="form-control" required>
                        </div>
                        <div class="form-group"><label class=" form-control-label">Keterangan</label>
                            <input type="text" name="keterangan" placeholder="Masukkan Keterangan" class="form-control">
                        </div>
                        <button type="submit" value="SIMPAN" name="simpan" class="btn btn-primary">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?= $this->endSection() ?>