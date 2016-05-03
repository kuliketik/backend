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
        <h2 style="margin-top:0px">Tbpakaian <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NamaPakaian <?php echo form_error('namaPakaian') ?></label>
            <input type="text" class="form-control" name="namaPakaian" id="namaPakaian" placeholder="NamaPakaian" value="<?php echo $namaPakaian; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">HargaPakaian <?php echo form_error('hargaPakaian') ?></label>
            <input type="text" class="form-control" name="hargaPakaian" id="hargaPakaian" placeholder="HargaPakaian" value="<?php echo $hargaPakaian; ?>" />
        </div>
	    <input type="hidden" name="idPakaian" value="<?php echo $idPakaian; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pakaian') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>