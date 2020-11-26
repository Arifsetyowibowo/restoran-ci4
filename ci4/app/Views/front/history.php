<?= $this->extend('front/template/head') ?>

<?= $this->section('content') ?>
<style>
    .product-details {
        width: 15% !important;
    }
</style>
<div class="shopping-cart tm-container-inner">
    <?php if (count($orderdetail) === 0) : ?>
        <div class="alert alert-danger text-center" role="alert">
            Anda Tidak Memiliki History Pembelian
        </div>
    <?php else : ?>
        <div class="column-labels">
            <label class="product-image" style="width: 21%;">Tanggal Order</label>
            <label class="product-details">Gambar</label>
            <label class="product-price" style="width: 15%;">Produk</label>
            <label class="product-quantity" style="width: 14%;">Harga</label>
            <label class="product-removal" style="width: 7%;">Jumlah</label>
            <label class="product-line-price">Total</label>
            <label class="product-line-price">&nbsp;</label>
        </div>
        <?php foreach ($orderdetail as $key => $value) : ?>
            <?php
            $time = strtotime($value['tglorder']);
            $myFormatForView = date("d-m-yy G:i", $time);
            ?>
            <div class="product">
                <div class="product-details" style="width: 15%;">
                    <div class="product-title"><?= $myFormatForView ?></div>
                </div>
                <div class="product-image">
                    <img src="<?= base_url('/uploud/' . $value['gambar'] . '') ?>">
                </div>
                <div class="product-details">
                    <div class="product-title"><?= $value['menu'] ?></div>
                </div>
                <div class="product-details" style="margin-right:15px;">
                    <?= number_format($value['harga'], 0, ',', '.')  ?></div>

                <div class=" product-details">
                    <p class="product-name"><a><?= $value['jumlah'] ?></a></p>
                </div>
                <div class="product-details">
                    <?php $total = $value['harga'] * $value['jumlah'] ?>
                    <a><?= number_format($total, 0, ',', '.')  ?></a></p>
                </div>
          </div>
          <?php endforeach ?>
    <?php endif; ?>

    <?= $this->endSection() ?>