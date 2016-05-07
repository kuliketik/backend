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
        <h2>TbMenu List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>NamaMenu</th>
		<th>LinkMenu</th>
		<th>IconMenu</th>
		<th>IsActive</th>
		<th>IsParent</th>
		
            </tr><?php
            foreach ($menu_data as $menu)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $menu->namaMenu ?></td>
		      <td><?php echo $menu->linkMenu ?></td>
		      <td><?php echo $menu->iconMenu ?></td>
		      <td><?php echo $menu->isActive ?></td>
		      <td><?php echo $menu->isParent ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>