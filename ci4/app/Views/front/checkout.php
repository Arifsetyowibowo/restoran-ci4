<?= $this->extend('front/template/head') ?>

<?= $this->section('content') ?>

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
        <a href="<?= base_url('bayar')?>" class="btn btn-outline-success " style="margin-top: 15px;">Process Checkout</a>
        
      </div>


    </form>
  </div>

</div>



<?= $this->endSection() ?>





