
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Loundry | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><?php echo lang('login_heading');?></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><?php echo lang('login_subheading');?></p>
        <?php
        if($message != NULL){ ?>
          <div class="callout callout-danger">
            <?php echo $message;?>
          </div>
        <?php } ?>

        <?php echo form_open("auth/login");?>
          <div class="form-group has-feedback">
            <?php echo form_input($identity);?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <?php echo form_input($password);?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <?php
                  echo form_checkbox('remember', '1', FALSE, 'id="remember"','class="form-control"');
                  echo lang('login_remember_label', 'remember','class="form-label"');
                  ?>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-primary btn-block btn-flat"');?>
            </div><!-- /.col -->
          </div>
        <?php echo form_close();?>
        <a href="forgot_password"><?php echo lang('login_forgot_password');?></a><br>
      </div>
    </div>
    <script src="<?php echo base_url() ?>template/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>template/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>template/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
