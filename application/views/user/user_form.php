

<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>USER</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>USER</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input USER</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
                <form role='form' action="<?php echo $action; ?>" method="post">
                <div class='box-body'>
	
                            <div class='form-group'>
                              Email User <?php echo form_error('email_user') ?>
                                <input type="text" class="form-control" name="email_user" id="email_user" placeholder="Email User" value="<?php echo $email_user; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Nama User <?php echo form_error('nama_user') ?>
                                <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama User" value="<?php echo $nama_user; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Password User <?php echo form_error('password_user') ?>
                                <input type="text" class="form-control" name="password_user" id="password_user" placeholder="Password User" value="<?php echo $password_user; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Alamat User <?php echo form_error('alamat_user') ?>
                                <textarea class="form-control" rows="3" name="alamat_user" id="alamat_user" placeholder="Alamat User"><?php echo $alamat_user; ?></textarea>
                            </div>
	    <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />
                </div><!-- /.box-body -->
                <div class='box-footer'>
                <a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button>
                </div><!-- /.box-footer -->
              </form>
            </div><!-- /.box -->
          </div>
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->