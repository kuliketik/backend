<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Tbcucian List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('cucian/create'), 'Create', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('cucian/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('cucian/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>IdPelanggan</th>
		    <th>IdKurir</th>
		    <th>BiayaCucian</th>
		    <th>BeratCucian</th>
		    <th>KetCucian</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($cucian_data as $cucian)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $cucian->idPelanggan ?></td>
		    <td><?php echo $cucian->idKurir ?></td>
		    <td><?php echo $cucian->biayaCucian ?></td>
		    <td><?php echo $cucian->beratCucian ?></td>
		    <td><?php echo $cucian->ketCucian ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('cucian/read/'.$cucian->idCucian),'Read'); 
			echo ' | '; 
			echo anchor(site_url('cucian/update/'.$cucian->idCucian),'Update'); 
			echo ' | '; 
			echo anchor(site_url('cucian/delete/'.$cucian->idCucian),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
    </body>
</html>