
<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>TbOrder List</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>TbOrder List</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='box box-solid box-info'>
          <div class='box-header with-border'>
            <h3 class='box-title'>TbOrder List</h3>
          </div><!-- /.box-header -->

          <div class='box-body'>
            <div class="col-md-4">
                <?php echo anchor('order/create/','Create',array('class'=>'btn btn-success btn-sm'));?> </div>
            <div class="col-md-4 text-center"> 
		<?php echo anchor(site_url('order/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('order/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></div>
          </div>
          <div class='box-body'>

          <table class="table table-bordered table-striped" id="mytable">
                      <thead>
                          <tr>
                              <th width="80px">No</th>
		    <th>IdUser</th>
		    <th>BeratOrder</th>
		    <th>HargaOrder</th>
		    <th>NotifOrder</th>
		    <th>KeteranganOrder</th>
		    <th>Action</th>
                          </tr>
                      </thead>
	    <tbody>
                      <?php
                      $start = 0;
                      foreach ($order_data as $order)
                      {
                          ?>
                          <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $order->idUser ?></td>
		    <td><?php echo $order->beratOrder ?></td>
		    <td><?php echo $order->hargaOrder ?></td>
		    <td><?php echo $order->notifOrder ?></td>
		    <td><?php echo $order->keteranganOrder ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('order/read/'.$order->idOrder),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('order/update/'.$order->idOrder),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('order/delete/'.$order->idOrder),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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