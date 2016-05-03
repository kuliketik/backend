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
        <h2 style="margin-top:0px">Tbpakaian Read</h2>
        <table class="table">
	    <tr><td>NamaPakaian</td><td><?php echo $namaPakaian; ?></td></tr>
	    <tr><td>HargaPakaian</td><td><?php echo $hargaPakaian; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pakaian') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>