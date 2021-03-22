<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Authorization</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php foreach ($css as $src) : ?>
    <link rel="stylesheet" type="text/css" href="<?= $src ?>">
  <?php endforeach;?>
 
</head>
<body class="hold-transition login-page">
  <?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
    </div>

    <?php } else if($this->session->flashdata('error')){  ?>

    <div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
    </div>

    <?php } else if($this->session->flashdata('warning')){  ?>

    <div class="alert alert-warning">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
    </div>

    <?php } else if($this->session->flashdata('info')){  ?>

    <div class="alert alert-info">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
    </div>
  <?php } ?>
<div class="login-box">
  <div class="login-logo">
    <b>Reservasi Konsultasi</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in Administrator</p>
      <form action="<?php echo base_url('auth/postAuth') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password"  name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

 <?php foreach ($js as $src) : ?>
    <script type="text/javascript" src="<?= $src ?>" charset="utf-8"></script>
  <?php endforeach;?>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
