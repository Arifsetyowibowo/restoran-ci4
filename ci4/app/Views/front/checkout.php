<?= $this->extend('front/template/head') ?>

<?= $this->section('content') ?>
<!-- 
<section class="shop checkout section">
    <div class="">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="checkout-form">
                    <h2>Make Your Checkout Here</h2>
                    <br>
                    
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
                  
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="order-details">
                    
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
</section> -->
<div id="checkout" class="tm-container-inner">
  <div>
    <form>
      <div id="form-section1">

        <h2 class="steps">1. Billing Address</h2>

        <p>Nama :</p>
        <input type="text" disabled class="checkout-field" name="name" value="<?= session()->get('namapelanggan')?>" >
        <p>Email :</p>
        <input type="text" disabled class="checkout-field" name="email" value="<?= session()->get('emailpelanggan')?>" required>
        <br />
        <p>No telp :</p>
        <input type="text" disabled class="checkout-field" name="telp" value="<?= session()->get('telppelanggan')?>" >
        <p>Alamat :</p>
        <input type="text" disabled class="checkout-field" name="alamat"value="<?= session()->get('alamatpelanggan')?>" required>
        <br />
       

      </div>

      <div id="form-section2">
        <h2 class="steps">2. Order Review</h2>
       
        <table id="overview-table">
          <tr>
            <td>Subtotal</td>
            <td> Rp. <?= number_format($total, 0, ',', '.')  ?></td>
          </tr>
          <tr>
            <td>Total</td>
            <td>Rp. <?= number_format($total, 0, ',', '.')  ?></td>
          </tr>

        </table>
        <a href="<?= base_url('bayar')?>" class="btn btn-outline-success">Process Checkout</a>
        
      </div>


    </form>
  </div>

</div>



<?= $this->endSection() ?>





