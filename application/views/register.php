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
          <h1>Register</h1>
        </div>
        <?= form_open() ?>
          <div class="form-group">
            <label for="inputEmail4">Username*</label>
            <input type="text" class="form-control" id="inputEmail4" name="username">
            <small id="passwordHelpBlock" class="form-text text-muted">
              20 characters or less, letters and digit only.
            </small>
          </div>
          <div class="form-group mt-4">
            <label for="inputAddress">Email*</label>
            <input type="text" class="form-control" id="inputAddress" name="email">
          </div>
          <div class="form-group mt-4">
            <label for="inputAddress2">Password*</label>
            <input type="password" class="form-control" id="inputAddress2" name="password">
          </div>
          <div class="form-group mt-4">
            <label for="inputCity">Password Confirmation*</label>
            <input type="password" class="form-control" id="inputAddress" name="conm_pass">
            <small id="passwordHelpBlock" class="form-text text-muted">
              Enter the same password for verification 
            </small>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-default" value="Register">
          </div>
          <small id="passwordHelpBlock" class="form-text text-muted">
            Already Registered then <a href="<?php echo base_url()?>login"> Click Here </a> to Login 
          </small>
        </form>
      </div>
    </div><!-- .row -->
  </div>
</div><!-- .container -->




<!-- <div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-3 col-sm-4 contact-form">
      <h3> Register</h3><hr/>
      <form class="mt-3">
        <div class="form-group">
          <label for="inputEmail4">Username*</label>
          <input type="email" class="form-control" id="inputEmail4" name="username">
          <small id="passwordHelpBlock" class="form-text text-muted">
            20 characters or less, letters and digit no special characters are allowed except (@/./_/-). 
          </small>
        </div>
        <div class="form-group mt-4">
          <label for="inputAddress">Email*</label>
          <input type="text" class="form-control" id="inputAddress" name="email">
        </div>
        <div class="form-group mt-4">
          <label for="inputAddress2">Password*</label>
          <input type="text" class="form-control" id="inputAddress2" name="password">
        </div>
        <div class="form-group mt-4">
          <label for="inputCity">Password Confirmation*</label>
          <input type="text" class="form-control" id="inputAddress" name="conm_pass">
          <small id="passwordHelpBlock" class="form-text text-muted">
            Enter the same password for verification 
          </small>
        </div>
        <button type="submit" class="btn btn-success btn-sm btn-block">Sign Up</button>
      </form> <hr/>
      <small id="passwordHelpBlock" class="form-text text-muted">
      Already Registered then <a href="<?php echo base_url()?>register"> Click Here </a> to Login 
    </small>
    </div>
  </div>
</div> -->