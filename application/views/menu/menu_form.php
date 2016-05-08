

<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>MENU</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>MENU</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input MENU</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
                <form role='form' action="<?php echo $action; ?>" method="post">
                <div class='box-body'>
	
                            <div class='form-group'>
                              Nama Menu <?php echo form_error('nama_menu') ?>
                                <input type="text" class="form-control" name="nama_menu" id="nama_menu" placeholder="Nama Menu" value="<?php echo $nama_menu; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Link Menu <?php echo form_error('link_menu') ?>
                                <input type="text" class="form-control" name="link_menu" id="link_menu" placeholder="Link Menu" value="<?php echo $link_menu; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Icon Menu <?php echo form_error('icon_menu') ?>
                                <input type="text" class="form-control" name="icon_menu" id="icon_menu" placeholder="Icon Menu" value="<?php echo $icon_menu; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Active <?php echo form_error('active') ?>
                                <input type="text" class="form-control" name="active" id="active" placeholder="Active" value="<?php echo $active; ?>" />
                            </div>
	
                            <div class='form-group'>
                              Parent <?php echo form_error('parent') ?>
                                <input type="text" class="form-control" name="parent" id="parent" placeholder="Parent" value="<?php echo $parent; ?>" />
                            </div>
	    <input type="hidden" name="id_menu" value="<?php echo $id_menu; ?>" />
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