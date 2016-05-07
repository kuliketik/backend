

<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>TBLOUNDRY</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>TBLOUNDRY</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input TBLOUNDRY</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
                <form role='form' action="<?php echo $action; ?>" method="post">
                <div class='box-body'>
	
                            <div class='form-group'>
                              IdUser <?php echo form_error('idUser') ?>
                                <input type="text" class="form-control" name="idUser" id="idUser" placeholder="IdUser" value="<?php echo $idUser; ?>" />
                            </div>
	
                            <div class='form-group'>
                              NamaLoundry <?php echo form_error('namaLoundry') ?>
                                <input type="text" class="form-control" name="namaLoundry" id="namaLoundry" placeholder="NamaLoundry" value="<?php echo $namaLoundry; ?>" />
                            </div>
	
                            <div class='form-group'>
                              SloganLoundry <?php echo form_error('sloganLoundry') ?>
                                <input type="text" class="form-control" name="sloganLoundry" id="sloganLoundry" placeholder="SloganLoundry" value="<?php echo $sloganLoundry; ?>" />
                            </div>
	
                            <div class='form-group'>
                              AlamatLoundry <?php echo form_error('alamatLoundry') ?>
                                <input type="text" class="form-control" name="alamatLoundry" id="alamatLoundry" placeholder="AlamatLoundry" value="<?php echo $alamatLoundry; ?>" />
                            </div>
	    <input type="hidden" name="idLoundry" value="<?php echo $idLoundry; ?>" />
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