

<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>KETERANGAN</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>KETERANGAN</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input KETERANGAN</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
                <form role='form' action="<?php echo $action; ?>" method="post">
                <div class='box-body'>
	
                            <div class='form-group'>
                              Id Order <?php echo form_error('id_order') ?>
                                <input type="text" class="form-control" name="id_order" id="id_order" placeholder="Id Order" value="<?php echo $id_order; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Id Pakaian <?php echo form_error('id_pakaian') ?>
                                <input type="text" class="form-control" name="id_pakaian" id="id_pakaian" placeholder="Id Pakaian" value="<?php echo $id_pakaian; ?>" />
                            </div>
	    <input type="hidden" name="id_keterangan" value="<?php echo $id_keterangan; ?>" />
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