<!-- <div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-3 col-sm-4 contact-form">
      <h3> Login</h3><hr/>
      <form class="mt-3">
        <div class="form-group">
          <label for="inputEmail4">Username/Email*</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group mt-4">
          <label for="inputAddress2">Password*</label>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <button type="submit" class="btn btn-primary btn-sm btn-block">login</button>
      </form> <hr/>
      <small id="passwordHelpBlock" class="form-text text-muted">
        <p>Forgot Password? <a href="<?php echo base_url()?>register"> Click Here </a> </p>
        <p>Not Registered yet? <a href="<?php echo base_url()?>register"> Register </a> </p>
    </small>
    </div>
  </div>
</div> -->
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-3 col-sm-4 contact-form">
      <?php if (validation_errors()) : ?>
        <div class="col-md-12">
          <div class="alert alert-danger" role="alert">
            <?= validation_errors() ?>
          </div>
        </div>
      <?php endif; ?>
      <?php if (isset($error)) : ?>
        <div class="col-md-12">
          <div class="alert alert-danger" role="alert">
            <?= $error ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="col-md-12">
        <div class="page-header">
          <h1>Login</h1>
        </div>
        <?= form_open() ?>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-default" value="Login">
          </div>
        </form><hr/>
        <small id="passwordHelpBlock" class="form-text text-muted">
           <!--  <p>Forgot Password? <a href="<?php echo base_url()?>register"> Click Here </a> </p> -->
            <p>Not Registered yet? <a href="<?php echo base_url()?>register"> Register </a> </p>
        </small>
      </div>
    </div>
  </div><!-- .row -->
</div>