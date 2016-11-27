<?php echo $this->getContent(); ?>
<center>
</br>
</br>
</br>

<h2> Current Packages </h2>

<table border="1" width="100%">
	<thead>
	<tr>
	    <td>Package Id</td>
            <td>Package Price</td>
            <td>Package Name</td>
		<td> Gateway </td>
	    <td>Monthly Price</td>
            <td>Annual Price</td>
	    <td>Included Country</td>
	    <td>Excluded Country</td>
        </tr>
	</thead>
    	<tbody> 
	<?php foreach ($pck as $pck1) { ?>
	    <tr>
            <td><?php echo $pck1->p_id; ?></td>
            <td><?php echo $pck1->price; ?></td>
            <td><?php echo $pck1->package_name; ?></td>
		<td><?php echo $pck1->gateway; ?></td>
            <td><?php echo $pck1->monthly; ?></td>
	    <td><?php echo $pck1->annually; ?></td>
	    <td><?php echo $pck1->INC_Country; ?> </td>
	    <td><?php echo $pck1->EXC_Country; ?> </td>
         </tr>
	<?php } ?>
    </tbody>
</table>
