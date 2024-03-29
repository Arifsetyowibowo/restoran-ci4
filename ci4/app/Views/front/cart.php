<?= $this->extend('front/template/head') ?>

<?= $this->section('content') ?>

<?php if ($totalitem === 0) : ?>
        <div class="alert alert-danger text-center" role="alert" style="margin: 30px; ">
            Keranjang Kosong ,Silahkan Belanja Terlebih Dahulu <a href="<?= base_url() ?>"
                class="alert-link">&nbsp; Home</a>
        </div>
        <?php else : ?>
<div class="shopping-cart tm-container-inner">


    <div class="column-labels">
        <label class="product-image">Gambar</label>
        <label class="product-details">Nama</label>
        <label class="product-price">Harga</label>
        <label class="product-quantity">Jumlah</label>
        <label class="product-removal">&nbsp;</label>
        <label class="product-line-price">Total</label>
    </div>

    <?php foreach ($cart as $key => $value) : ?>
        <div class="product">
            <div class="product-image">
                <img src="<?= base_url('/uploud/' . $value['gambar'] . '') ?>">
            </div>
            <div class="product-details">
                <div class="product-title"><?= $value['name'] ?></div>
            </div>
            <div class="product-price">
                <?= number_format($value['price'], 0, ',', '.')  ?></div>
            <div class="product-quantity">
                <a href="<?= base_url('/keranjang/minus/' . $value['qty'] . '/' . $value['rowid']) ?>" class="jmlh"><i class="fas fa-minus"></i></a>
                <input type="text" name="quantity[]" style="text-align:center;" class="input-number" disabled data-min="1" data-max="100" value="<?= $value['qty']; ?>">
                <a href="<?= base_url('/keranjang/plus/' . $value['qty'] . '/' . $value['rowid']) ?>"><i class="fas fa-plus"></i></a>
            </div>
            <div class=" product-removal">
                <button class="remove-product">
                    <a href="<?= base_url('/hapus/' . $value['rowid']) ?>" style="text-decoration: none; color:white;">Remove</a>
                </button>
            </div>
            <div class="product-line-price">
                <?= number_format($value['subtotal'], 0, ',', '.')  ?></div>
        </div>
    <?php endforeach ?>


    <div class="totals">
        <div class="totals-item">
            <label>Subtotal</label>
            <div class="totals-value" id="cart-subtotal"><?= number_format($total, 0, ',', '.')  ?></div>
        </div>

    </div>


    
    <?php if (!empty(session()->get('namapelanggan'))) { ?>
        <button class="checkout">
            <a href="<?= base_url('checkout') ?>" class="btn" style="text-decoration: none; color:white;">Checkout</a>
        </button>
    <?php } else { ?>
        <button class="checkout">
            <a href="<?= base_url('login') ?>" onclick="bowo()" style="text-decoration: none; color:white;"class="btn">Checkout</a>
        </button>
    <?php } ?>
    <button class="checkout"style="margin-right: 10px;">
    <a href="<?= base_url() ?>"  class="btn" style="text-decoration: none; color:white;">Continue shopping</a>
    </button>
</div>
<?php endif ?>


<script>
    function bowo() {
        alert("Harap Login Dahulu !");
    }
</script>
<?= $this->endSection() ?>