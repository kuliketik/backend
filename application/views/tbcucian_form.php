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
        <h2 style="margin-top:0px">Tbcucian <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">IdPelanggan <?php echo form_error('idPelanggan') ?></label>
            <input type="text" class="form-control" name="idPelanggan" id="idPelanggan" placeholder="IdPelanggan" value="<?php echo $idPelanggan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">IdKurir <?php echo form_error('idKurir') ?></label>
            <input type="text" class="form-control" name="idKurir" id="idKurir" placeholder="IdKurir" value="<?php echo $idKurir; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">BiayaCucian <?php echo form_error('biayaCucian') ?></label>
            <input type="text" class="form-control" name="biayaCucian" id="biayaCucian" placeholder="BiayaCucian" value="<?php echo $biayaCucian; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">BeratCucian <?php echo form_error('beratCucian') ?></label>
            <input type="text" class="form-control" name="beratCucian" id="beratCucian" placeholder="BeratCucian" value="<?php echo $beratCucian; ?>" />
        </div>
	    <div class="form-group">
            <label for="ketCucian">KetCucian <?php echo form_error('ketCucian') ?></label>
            <textarea class="form-control" rows="3" name="ketCucian" id="ketCucian" placeholder="KetCucian"><?php echo $ketCucian; ?></textarea>
        </div>
	    <input type="hidden" name="idCucian" value="<?php echo $idCucian; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('cucian') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>