

<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>TBKETERANGAN</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>TBKETERANGAN</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input TBKETERANGAN</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
                <form role='form' action="<?php echo $action; ?>" method="post">
                <div class='box-body'>
	
                            <div class='form-group'>
                              IdOrder <?php echo form_error('idOrder') ?>
                                <input type="text" class="form-control" name="idOrder" id="idOrder" placeholder="IdOrder" value="<?php echo $idOrder; ?>" />
                            </div>
	
                            <div class='form-group'>
                              IdPakaian <?php echo form_error('idPakaian') ?>
                                <input type="text" class="form-control" name="idPakaian" id="idPakaian" placeholder="IdPakaian" value="<?php echo $idPakaian; ?>" />
                            </div>
	    <input type="hidden" name="idKeterangan" value="<?php echo $idKeterangan; ?>" />
                </div><!-- /.box-body -->
                <div class='box-footer'>
                <a href="<?php echo site_url('keterangan') ?>" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button>
                </div><!-- /.box-footer -->
              </form>
            </div><!-- /.box -->
          </div>
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->