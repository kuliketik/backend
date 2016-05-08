
<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>Loundry List</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>Loundry List</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='box box-solid box-info'>
          <div class='box-header with-border'>
            <h3 class='box-title'>Loundry List</h3>
          </div><!-- /.box-header -->
          <div class='box-body'>
            <div class="col-md-4">
                <?php echo anchor(site_url('loundry/create'),'Create', 'class="btn btn-success"'); ?> | 
		<?php echo anchor(site_url('loundry/pdf'), 'PDF', 'class="btn btn-primary"'); ?></div><div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('loundry/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('loundry'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
          </div>
          <div class='box-body'>
            <table class='table table-hover'>
            <tr>
                <th>No</th>
		<th>Id User</th>
		<th>Nama Loundry</th>
		<th>Slogan Loundry</th>
		<th>Alamat Loundry</th>
		<th>Action</th>
            </tr><?php
                        foreach ($loundry_data as $loundry)
                        {
                            ?>
                            <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $loundry->id_user ?></td>
			<td><?php echo $loundry->nama_loundry ?></td>
			<td><?php echo $loundry->slogan_loundry ?></td>
			<td><?php echo $loundry->alamat_loundry ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('loundry/read/'.$loundry->id_loundry),'<i class="fa fa-eye"></i>',array('title'=>'Read','class'=>'btn btn-danger btn-sm')); 
				echo ' | '; 
				echo anchor(site_url('loundry/update/'.$loundry->id_loundry),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'Update','class'=>'btn btn-danger btn-sm')); 
				echo ' | '; 
				echo anchor(site_url('loundry/delete/'.$loundry->id_loundry),'<i class="fa fa-trash-o"></i>','title="Delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td> 
		</tr> <?php } ?>
            </table>
          </div><!-- /.box-body -->
          <div class='box-footer'>
            <div class="col-md-4">
            Total Record : <?php echo $total_rows ?>
            </div>
            <div class="col-md-4 text-center">
              <?php echo $pagination ?>
            </div>
          </div><!-- box-footer -->
        </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper --> 