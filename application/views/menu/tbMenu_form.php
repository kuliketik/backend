

<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>TBMENU</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>TBMENU</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input TBMENU</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
                <form role='form' action="<?php echo $action; ?>" method="post">
                <div class='box-body'>
	
                            <div class='form-group'>
                              NamaMenu <?php echo form_error('namaMenu') ?>
                                <input type="text" class="form-control" name="namaMenu" id="namaMenu" placeholder="NamaMenu" value="<?php echo $namaMenu; ?>" />
                            </div>
	
                            <div class='form-group'>
                              LinkMenu <?php echo form_error('linkMenu') ?>
                                <input type="text" class="form-control" name="linkMenu" id="linkMenu" placeholder="LinkMenu" value="<?php echo $linkMenu; ?>" />
                            </div>
	
                            <div class='form-group'>
                              IconMenu <?php echo form_error('iconMenu') ?>
                                <input type="text" class="form-control" name="iconMenu" id="iconMenu" placeholder="IconMenu" value="<?php echo $iconMenu; ?>" />
                            </div>
	
                            <div class='form-group'>
                              IsActive <?php echo form_error('isActive') ?>
                                <input type="text" class="form-control" name="isActive" id="isActive" placeholder="IsActive" value="<?php echo $isActive; ?>" />
                            </div>
	
                            <div class='form-group'>
                              IsParent <?php echo form_error('isParent') ?>
                                <input type="text" class="form-control" name="isParent" id="isParent" placeholder="IsParent" value="<?php echo $isParent; ?>" />
                            </div>
	    <input type="hidden" name="idMenu" value="<?php echo $idMenu; ?>" />
                </div><!-- /.box-body -->
                <div class='box-footer'>
                <a href="<?php echo site_url('menu') ?>" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button>
                </div><!-- /.box-footer -->
              </form>
            </div><!-- /.box -->
          </div>
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->