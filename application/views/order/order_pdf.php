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
        <h2>Order List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id User</th>
		<th>Berat Order</th>
		<th>Harga Order</th>
		<th>Notif Order</th>
		<th>Keterangan Order</th>
		
            </tr><?php
            foreach ($order_data as $order)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $order->id_user ?></td>
		      <td><?php echo $order->berat_order ?></td>
		      <td><?php echo $order->harga_order ?></td>
		      <td><?php echo $order->notif_order ?></td>
		      <td><?php echo $order->keterangan_order ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>