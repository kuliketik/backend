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
        <h2 style="margin-top:0px">Tbpelanggan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NamaPelanggan <?php echo form_error('namaPelanggan') ?></label>
            <input type="text" class="form-control" name="namaPelanggan" id="namaPelanggan" placeholder="NamaPelanggan" value="<?php echo $namaPelanggan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Lat <?php echo form_error('lat') ?></label>
            <input type="text" class="form-control" name="lat" id="lat" placeholder="Lat" value="<?php echo $lat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Lng <?php echo form_error('lng') ?></label>
            <input type="text" class="form-control" name="lng" id="lng" placeholder="Lng" value="<?php echo $lng; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamatPelanggan">AlamatPelanggan <?php echo form_error('alamatPelanggan') ?></label>
            <textarea class="form-control" rows="3" name="alamatPelanggan" id="alamatPelanggan" placeholder="AlamatPelanggan"><?php echo $alamatPelanggan; ?></textarea>
        </div>
	    <input type="hidden" name="idPelanggan" value="<?php echo $idPelanggan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pelanggan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>