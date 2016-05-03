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
        <h2>Tbcucian List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>IdPelanggan</th>
		<th>IdKurir</th>
		<th>BiayaCucian</th>
		<th>BeratCucian</th>
		<th>KetCucian</th>
		
            </tr><?php
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
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>