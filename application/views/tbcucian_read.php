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
        <h2 style="margin-top:0px">Tbcucian Read</h2>
        <table class="table">
	    <tr><td>IdPelanggan</td><td><?php echo $idPelanggan; ?></td></tr>
	    <tr><td>IdKurir</td><td><?php echo $idKurir; ?></td></tr>
	    <tr><td>BiayaCucian</td><td><?php echo $biayaCucian; ?></td></tr>
	    <tr><td>BeratCucian</td><td><?php echo $beratCucian; ?></td></tr>
	    <tr><td>KetCucian</td><td><?php echo $ketCucian; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('cucian') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>