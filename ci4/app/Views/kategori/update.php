<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>
<?php
echo session()->getFlashdata('info');
?>

<div class="col">
    <h1> UPDATE DATA </h1>
</div>



<div class="col-7">
    <form action="<?= base_url() ?>/admin/kategori/update" method="post">
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" value="<?= $kategori['kategori']?>" name="kategori" id="" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="<?= $kategori['keterangan']?>" id="" required>
        </div>
        <input type="hidden" name="idkategori" value="<?= $kategori['idkategori']?>" id="">
        <button type="submit" value="SIMPAN" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?= $this->endSection() ?>