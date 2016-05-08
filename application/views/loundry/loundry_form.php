

<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>LOUNDRY</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>LOUNDRY</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input LOUNDRY</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
                <form role='form' action="<?php echo $action; ?>" method="post">
                <div class='box-body'>
	
                            <div class='form-group'>
                              Id User <?php echo form_error('id_user') ?>
                                <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Nama Loundry <?php echo form_error('nama_loundry') ?>
                                <input type="text" class="form-control" name="nama_loundry" id="nama_loundry" placeholder="Nama Loundry" value="<?php echo $nama_loundry; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Slogan Loundry <?php echo form_error('slogan_loundry') ?>
                                <input type="text" class="form-control" name="slogan_loundry" id="slogan_loundry" placeholder="Slogan Loundry" value="<?php echo $slogan_loundry; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Alamat Loundry <?php echo form_error('alamat_loundry') ?>
                                <textarea class="form-control" rows="3" name="alamat_loundry" id="alamat_loundry" placeholder="Alamat Loundry"><?php echo $alamat_loundry; ?></textarea>
                            </div>
	    <input type="hidden" name="id_loundry" value="<?php echo $id_loundry; ?>" />
                </div><!-- /.box-body -->
                <div class='box-footer'>
                <a href="<?php echo site_url('loundry') ?>" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button>
                </div><!-- /.box-footer -->
              </form>
            </div><!-- /.box -->
          </div>
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->