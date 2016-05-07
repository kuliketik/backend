
<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>TbUser List</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>TbUser List</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='box box-solid box-info'>
          <div class='box-header with-border'>
            <h3 class='box-title'>TbUser List</h3>
          </div><!-- /.box-header -->

          <div class='box-body'>
            <div class="col-md-4">
                <?php echo anchor('user/create/','Create',array('class'=>'btn btn-success btn-sm'));?> </div>
            <div class="col-md-4 text-center"> 
		<?php echo anchor(site_url('user/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></div>
          </div>
          <div class='box-body'>

          <table class="table table-bordered table-striped" id="mytable">
                      <thead>
                          <tr>
                              <th width="80px">No</th>
		    <th>EmailUser</th>
		    <th>NamaUser</th>
		    <th>PasswordUser</th>
		    <th>AlamatUser</th>
		    <th>Action</th>
                          </tr>
                      </thead>
	    <tbody>
                      <?php
                      $start = 0;
                      foreach ($user_data as $user)
                      {
                          ?>
                          <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $user->emailUser ?></td>
		    <td><?php echo $user->namaUser ?></td>
		    <td><?php echo $user->passwordUser ?></td>
		    <td><?php echo $user->alamatUser ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('user/read/'.$user->idUser),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('user/update/'.$user->idUser),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('user/delete/'.$user->idUser),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                          <?php
                      }
                      ?>
                      </tbody>
                  </table>
                  <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
                  <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
                  <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
                  <script type="text/javascript">
                      $(document).ready(function () {
                          $("#mytable").dataTable();
                      });
                  </script>

          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->