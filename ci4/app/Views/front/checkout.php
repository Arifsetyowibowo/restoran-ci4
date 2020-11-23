<?= $this->extend('front/template/head') ?>

<?= $this->section('content') ?>

<section class="shop checkout section">
    <div class="">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="checkout-form">
                    <h2>Make Your Checkout Here</h2>
                    <br>
                    <!-- Form -->
                    <form class="form" method="post" action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama Pelanggan<span>*</span></label>
                                    <input type="text" disabled name="name" value="<?= session()->get('namapelanggan')?>" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email Address<span>*</span></label>
                                    <input type="email" disabled name="email" value="<?= session()->get('emailpelanggan')?>" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nomor Telepon<span>*</span></label>
                                    <input type="number" disabled name="telp" value="<?= session()->get('telppelanggan')?>" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Alamat<span>*</span></label>
                                    <input type="text" disabled name="alamat" value="<?= session()->get('alamatpelanggan')?>" required="required">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="order-details">
                    <!-- Order Widget -->
                    <div class="">
                        <h2>CART TOTALS</h2>
                        <div class="content">
                            <ul>
                                <li>Sub Total<span>Rp. <?= number_format($total, 0, ',', '.')  ?></span></li>
                                <li>Pengiriman<span>Rp. 0</span></li>
                                <li class="last">Total<span>Rp. <?= number_format($total, 0, ',', '.')  ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <div class="content">
                            <div class="button">
                                <a href="<?= base_url('bayar')?>" class="btn">proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>





