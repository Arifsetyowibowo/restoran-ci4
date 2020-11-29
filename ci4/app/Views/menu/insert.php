<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Insert Menu</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">

        <div class="col-lg-6">
            <div class="card">
                
                <div class="card-body card-block">
                    <form action="<?= base_url('/admin/menu/insert') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" name="idkategori" id="idkategori">
                                <?php foreach ($kategori as $key => $value) : ?>
                                    <option value="<?php echo $value['idkategori']; ?>"><?php echo $value['kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="menu">Menu</label>
                            <input type="text" class="form-control" name="menu" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" name="harga" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" id="" required>
                        </div>
                        <button type="submit" value="SIMPAN" name="simpan" class="btn btn-primary">Simpan</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?= $this->endSection() ?>