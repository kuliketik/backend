

<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>TBUSER</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>TBUSER</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input TBUSER</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
                <form role='form' action="<?php echo $action; ?>" method="post">
                <div class='box-body'>
	
                            <div class='form-group'>
                              EmailUser <?php echo form_error('emailUser') ?>
                                <input type="text" class="form-control" name="emailUser" id="emailUser" placeholder="EmailUser" value="<?php echo $emailUser; ?>" />
                            </div>
	
                            <div class='form-group'>
                              NamaUser <?php echo form_error('namaUser') ?>
                                <input type="text" class="form-control" name="namaUser" id="namaUser" placeholder="NamaUser" value="<?php echo $namaUser; ?>" />
                            </div>
	
                            <div class='form-group'>
                              PasswordUser <?php echo form_error('passwordUser') ?>
                                <input type="text" class="form-control" name="passwordUser" id="passwordUser" placeholder="PasswordUser" value="<?php echo $passwordUser; ?>" />
                            </div>
	
                            <div class='form-group'>
                              AlamatUser <?php echo form_error('alamatUser') ?>
                                <input type="text" class="form-control" name="alamatUser" id="alamatUser" placeholder="AlamatUser" value="<?php echo $alamatUser; ?>" />
                            </div>
	    <input type="hidden" name="idUser" value="<?php echo $idUser; ?>" />
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