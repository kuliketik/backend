

<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>TBORDER</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>TBORDER</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input TBORDER</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
                <form role='form' action="<?php echo $action; ?>" method="post">
                <div class='box-body'>
	
                            <div class='form-group'>
                              IdUser <?php echo form_error('idUser') ?>
                                <input type="text" class="form-control" name="idUser" id="idUser" placeholder="IdUser" value="<?php echo $idUser; ?>" />
                            </div>
	
                            <div class='form-group'>
                              BeratOrder <?php echo form_error('beratOrder') ?>
                                <input type="text" class="form-control" name="beratOrder" id="beratOrder" placeholder="BeratOrder" value="<?php echo $beratOrder; ?>" />
                            </div>
	
                            <div class='form-group'>
                              HargaOrder <?php echo form_error('hargaOrder') ?>
                                <input type="text" class="form-control" name="hargaOrder" id="hargaOrder" placeholder="HargaOrder" value="<?php echo $hargaOrder; ?>" />
                            </div>
	
                            <div class='form-group'>
                              NotifOrder <?php echo form_error('notifOrder') ?>
                                <input type="text" class="form-control" name="notifOrder" id="notifOrder" placeholder="NotifOrder" value="<?php echo $notifOrder; ?>" />
                            </div>
	
                            <div class='form-group'>
                              KeteranganOrder <?php echo form_error('keteranganOrder') ?>
                                <input type="text" class="form-control" name="keteranganOrder" id="keteranganOrder" placeholder="KeteranganOrder" value="<?php echo $keteranganOrder; ?>" />
                            </div>
	    <input type="hidden" name="idOrder" value="<?php echo $idOrder; ?>" />
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