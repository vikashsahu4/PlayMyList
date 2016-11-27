
<html>
    <head>
       
    </head>
    <body>
	<?php echo $this->tag->linkTo(array('taxrate/add', 'Add Tax')); ?></td>
	<table border="2">
	<thead>
	<tr>
	    <td>Name</td>
            <td>Action</td>
        </tr>
	</thead>
    	<tbody> 
	<?php foreach ($coa as $coas) { ?>
	    <tr>
            <td><?php echo $coas->coa_name; ?>(<?php echo $coas->coa_tax_percent; ?>)</td>
	    <td><?php echo $this->tag->linkTo(array('taxrate/delete/' . $coas->coa_id, 'Delete')); ?></td>
            </tr>
	<?php } ?>
    </tbody>
</table>
    </body>
</html>

