
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
                <div class='box-body'>
	
                  <div class='form-group'>
                    Nama Menu
                    <input type='text' class='form-control' value='<?php echo $nama_menu; ?>' disabled>
                  </div>
	
                  <div class='form-group'>
                    Link Menu
                    <input type='text' class='form-control' value='<?php echo $link_menu; ?>' disabled>
                  </div>
	
                  <div class='form-group'>
                    Icon Menu
                    <input type='text' class='form-control' value='<?php echo $icon_menu; ?>' disabled>
                  </div>
	
                  <div class='form-group'>
                    Active
                    <input type='text' class='form-control' value='<?php echo $active; ?>' disabled>
                  </div>
	
                  <div class='form-group'>
                    Parent
                    <input type='text' class='form-control' value='<?php echo $parent; ?>' disabled>
                  </div>
                </div>
                <div class='box-footer'>
                <a href="<?php echo site_url('menu') ?>" class="btn btn-default">Back</a>
                </div>
            </div><!-- /.box -->
          </div>
      </div>
    </div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
                