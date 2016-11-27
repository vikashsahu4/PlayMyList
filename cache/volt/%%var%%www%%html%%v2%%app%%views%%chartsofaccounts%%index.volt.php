
<html>
    <head>
       
    </head>
    <body>
	<table border="2">
	<thead>
	<tr>
	    <td>Name</td>
            <td>Customer</td>
            <td>Date</td>
            <td>Total</td>
            <td>Status</td>
	    <td>Date</td>
            <td>Total</td>
        </tr>
	</thead>
    	<tbody> 
	<?php foreach ($coa as $coas) { ?>
	    <tr>
            <td><?php echo $coas->coa_name; ?></td>
            <td><?php echo $coas->coa_type; ?></td>
            <td><?php echo $coas->coa_head; ?></td>
            <td><?php echo $coas->coa_input_acc; ?></td>
            <td><?php echo $coas->coa_auto_tax; ?></td>
	    <td><?php echo $coas->coa_explanation; ?></td>
	    <td><?php echo $coas->coa_tax_percent; ?></td>
            </tr>
	<?php } ?>
    </tbody>
</table>
    </body>
</html>

