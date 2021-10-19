<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('/'); ?>/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('/'); ?>/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('/'); ?>/admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="ukmbahasa.poliupg.ac.id"><b>UKM Bahasa PNUP</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?= view('Myth\Auth\Views\_message_block') ?>

        <form action="<?= route_to('login') ?>" method="post">
          <?= csrf_field() ?>
          <?php if ($config->validFields === ['email']) : ?>
            <div class="input-group mb-3">
              <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              <div class="invalid-feedback">
                <?= session('errors.login') ?>
              </div>
            </div>
          <?php else : ?>
            <div class="input-group mb-3">
              <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              <div class="invalid-feedback">
                <?= session('errors.login') ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <div class="invalid-feedback">
              <?= session('errors.password') ?>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <?php if ($config->allowRemembering) : ?>
                <div class="icheck-primary">
                  <input type="checkbox" id="remember" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                  <?= lang('Auth.rememberMe') ?>
                  <label for="remember">
                  </label>
                </div>
              <?php endif; ?>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <?php if ($config->allowRegistration) : ?>
          <p class="mb-0">
            <a href="<?= route_to('register') ?>" class="text-center"><?= lang('Auth.needAnAccount') ?></a>
          </p>
        <?php endif; ?>
        <?php if ($config->activeResetter) : ?>
          <p class="mb-1">
            <a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
          </p>
        <?php endif; ?>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('/'); ?>/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('/'); ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('/'); ?>/admin/dist/js/adminlte.min.js"></script>
</body>

</html>