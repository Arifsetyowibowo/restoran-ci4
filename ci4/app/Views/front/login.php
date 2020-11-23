<?= $this->extend('front/template/head') ?>

<?= $this->section('content') ?>


<!-- Form Module-->
<div class="tm-container-inner">
  <div class="module form-module" style="margin-top: 60px;">
    <div class="toggle"><i class="fa fa-pencil-alt fa-times"></i>
      <div class="tooltip">Click Me</div>
    </div>
    <div class="form ">
      <h2>Login to your account</h2>
      <?php if (session()->getFlashdata('message') != null) : ?>
    
          <div class="alert alert-success" role="alert"><?= session()->getFlashdata('message') ?></div>
     
      <?php endif ?>
      <?php if (session()->getFlashdata('error') != null) : ?>
     
          <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
        
      <?php endif ?>
      <form method="post" action="<?= base_url('/authlogin') ?>">
        <input type="text" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />
        <button type="submit" name="login" value="Login">Login</button>
        <input type="text" placeholder="Username" style="visibility: hidden;" />
        <input type="password" placeholder="Password" style="visibility: hidden;" />
        <input type="password" placeholder="Password" style="visibility: hidden;" />


      </form>
    </div>
    <div class="form ">
      <h2>Create an account</h2>
      <?php if (session()->getFlashdata('info') != null) : ?>
   
          <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('info') ?></div>
        
      <?php endif ?>
      <form method="post" action="<?= base_url('authregister') ?>">
        <input type="text" name="pelanggan" placeholder="Nama" required />
        <input type="text" name="alamat" placeholder="Alamat" required/>
        <input type="text" name="telp" placeholder="Telp" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required/>
        <button name="register" type="submit" value="Register">Register</button>
      </form>
    </div>
   
  </div>
</div>

<?= $this->endSection() ?>