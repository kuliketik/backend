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
        <h2 style="margin-top:0px">Tbkurir <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NamaKurir <?php echo form_error('namaKurir') ?></label>
            <input type="text" class="form-control" name="namaKurir" id="namaKurir" placeholder="NamaKurir" value="<?php echo $namaKurir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">AlamatKurir <?php echo form_error('alamatKurir') ?></label>
            <input type="text" class="form-control" name="alamatKurir" id="alamatKurir" placeholder="AlamatKurir" value="<?php echo $alamatKurir; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">JenisKelaminKurir <?php echo form_error('jenisKelaminKurir') ?></label>
            <input type="text" class="form-control" name="jenisKelaminKurir" id="jenisKelaminKurir" placeholder="JenisKelaminKurir" value="<?php echo $jenisKelaminKurir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">UsernameKurir <?php echo form_error('usernameKurir') ?></label>
            <input type="text" class="form-control" name="usernameKurir" id="usernameKurir" placeholder="UsernameKurir" value="<?php echo $usernameKurir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PasswordKurir <?php echo form_error('passwordKurir') ?></label>
            <input type="text" class="form-control" name="passwordKurir" id="passwordKurir" placeholder="PasswordKurir" value="<?php echo $passwordKurir; ?>" />
        </div>
	    <input type="hidden" name="idKurir" value="<?php echo $idKurir; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kurir') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>