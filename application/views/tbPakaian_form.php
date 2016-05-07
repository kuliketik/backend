

<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>TBPAKAIAN</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>TBPAKAIAN</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input TBPAKAIAN</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
                <form role='form' action="<?php echo $action; ?>" method="post">
                <div class='box-body'>
	
                            <div class='form-group'>
                              NamaPakaian <?php echo form_error('namaPakaian') ?>
                                <input type="text" class="form-control" name="namaPakaian" id="namaPakaian" placeholder="NamaPakaian" value="<?php echo $namaPakaian; ?>" />
                            </div>
	    <input type="hidden" name="idPakaian" value="<?php echo $idPakaian; ?>" />
                </div><!-- /.box-body -->
                <div class='box-footer'>
                <a href="<?php echo site_url('pakaian') ?>" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button>
                </div><!-- /.box-footer -->
              </form>
            </div><!-- /.box -->
          </div>
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->