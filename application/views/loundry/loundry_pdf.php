<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important;
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important;
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Loundry List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id User</th>
		<th>Nama Loundry</th>
		<th>Slogan Loundry</th>
		<th>Alamat Loundry</th>
		
            </tr><?php
            foreach ($loundry_data as $loundry)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $loundry->id_user ?></td>
		      <td><?php echo $loundry->nama_loundry ?></td>
		      <td><?php echo $loundry->slogan_loundry ?></td>
		      <td><?php echo $loundry->alamat_loundry ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>