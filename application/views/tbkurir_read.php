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
        <h2 style="margin-top:0px">Tbkurir Read</h2>
        <table class="table">
	    <tr><td>NamaKurir</td><td><?php echo $namaKurir; ?></td></tr>
	    <tr><td>AlamatKurir</td><td><?php echo $alamatKurir; ?></td></tr>
	    <tr><td>JenisKelaminKurir</td><td><?php echo $jenisKelaminKurir; ?></td></tr>
	    <tr><td>UsernameKurir</td><td><?php echo $usernameKurir; ?></td></tr>
	    <tr><td>PasswordKurir</td><td><?php echo $passwordKurir; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kurir') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>