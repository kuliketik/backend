

<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>ORDER</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>ORDER</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input ORDER</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
                <form role='form' action="<?php echo $action; ?>" method="post">
                <div class='box-body'>
	
                            <div class='form-group'>
                              Id User <?php echo form_error('id_user') ?>
                                <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Berat Order <?php echo form_error('berat_order') ?>
                                <input type="text" class="form-control" name="berat_order" id="berat_order" placeholder="Berat Order" value="<?php echo $berat_order; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Harga Order <?php echo form_error('harga_order') ?>
                                <input type="text" class="form-control" name="harga_order" id="harga_order" placeholder="Harga Order" value="<?php echo $harga_order; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Notif Order <?php echo form_error('notif_order') ?>
                                <input type="text" class="form-control" name="notif_order" id="notif_order" placeholder="Notif Order" value="<?php echo $notif_order; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Keterangan Order <?php echo form_error('keterangan_order') ?>
                                <textarea class="form-control" rows="3" name="keterangan_order" id="keterangan_order" placeholder="Keterangan Order"><?php echo $keterangan_order; ?></textarea>
                            </div>
	    <input type="hidden" name="id_order" value="<?php echo $id_order; ?>" />
                </div><!-- /.box-body -->
                <div class='box-footer'>
                <a href="<?php echo site_url('order') ?>" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button>
                </div><!-- /.box-footer -->
              </form>
            </div><!-- /.box -->
          </div>
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->