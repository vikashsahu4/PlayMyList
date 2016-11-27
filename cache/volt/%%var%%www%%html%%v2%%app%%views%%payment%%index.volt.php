<?php echo $this->getContent(); ?>

		
			<input type="hidden" name="CatDescription" value="Subscription for SlickAccount">
               	        <input type="hidden" name="payment" value="0"/>  
                    
                        <input type="hidden" name="rm" value="2">   

<table border="1" width="100%">
	<thead>
	<tr>
	    <td>Package Name</td>
            <td>Package Price</td>
            <td>Monthly</td>
            <td>Annually</td>
	    <td> Pay </td>
        </tr>
	</thead>
    	<tbody> 
	<?php foreach ($pck as $pck1) { ?>
	    <tr>
            <td><?php echo $pck1->package_name; ?></td>
            <td><?php echo $pck1->price; ?></td>
            <td><?php echo $pck1->monthly; ?></td>
            <td><?php echo $pck1->annually; ?></td>
	   <td> <a href="payment/paypal/?pid=<?php echo $pck1->price; ?>"> <button>Pay</button> </a> </td>
         </tr>
	<?php } ?>
    </tbody>
<center>
<br>
</br>
</br>

<?php echo $this->tag->endForm(); ?>

</br>
 <h2> Previous Payments </h2>
</br>

<table border="1" width="100%">
	<thead>
	<tr>
	    <td>Order Date</td>
            <td>Plan</td>
            <td>Invoice ID</td>
            <td>Next Date of Payment</td>
        </tr>
	</thead>
    	<tbody> 
	<?php foreach ($py as $py1) { ?>
	    <tr>
            <td><?php echo $py1->first_pay; ?></td>
            <td><?php echo $py1->plan; ?></td>
            <td><?php echo $py1->unique_id; ?></td>
            <td><?php echo $py1->next_pay; ?></td>
         </tr>
	<?php } ?>
    </tbody>
</table>
