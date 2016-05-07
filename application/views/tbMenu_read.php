
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
                <div class='box-body'>
	<?php
  $active = $isActive==1?'AKTIF':'TIDAK AKTIF';
  $parent = $isParent>1?'MAINMENU':'SUBMENU';
   ?>
                  <div class='form-group'>
                    NamaMenu
                    <input type='text' class='form-control' value='<?php echo $namaMenu; ?>' disabled>
                  </div>

                  <div class='form-group'>
                    LinkMenu
                    <input type='text' class='form-control' value='<?php echo $linkMenu; ?>' disabled>
                  </div>

                  <div class='form-group'>
                    IconMenu
                    <input type='text' class='form-control' value='<?php echo $iconMenu; ?>' disabled>
                  </div>

                  <div class='form-group'>
                    IsActive
                    <input type='text' class='form-control' value='<?php echo $active; ?>' disabled>
                  </div>

                  <div class='form-group'>
                    IsParent
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
