<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tbpelanggan Read</h2>
        <table class="table">
	    <tr><td>NamaPelanggan</td><td><?php echo $namaPelanggan; ?></td></tr>
	    <tr><td>Lat</td><td><?php echo $lat; ?></td></tr>
	    <tr><td>Lng</td><td><?php echo $lng; ?></td></tr>
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>AlamatPelanggan</td><td><?php echo $alamatPelanggan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pelanggan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>