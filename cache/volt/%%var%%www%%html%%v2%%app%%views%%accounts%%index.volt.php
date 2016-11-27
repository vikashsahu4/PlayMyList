<?php echo $this->getContent(); ?>
<center>

<h2> All Accounts </h2>
<p><?php echo $this->tag->linkTo(array('accounts/add', 'Add &raquo;')); ?></p>
<table border="2">
<thead>
<tr>
<td> Accounts</td>
<td> Total</td>
<td> Spent</td>
<td> Received</td>
</tr>
</thead>
<tbody>
<?php foreach ($coa as $rem) { ?>
<tr>
<td> <?php echo $rem->coa_name; ?> </td>
<td> <?php echo $rem->spent + $rem->received; ?> </td>
<td> <?php echo $rem->spent; ?> </td>
<td> <?php echo $rem->received; ?> </td>
<?php if ($rem->received + $rem->spent == 0) { ?>
<td> <?php echo $this->tag->linkTo(array('accounts/delete/' . $rem->coa_id, 'Delete')); ?> </td>
<?php } else { ?>
<td> <?php echo 'Delete Related Transactions first'; ?> </td>
<?php } ?>
</tr>
<?php } ?>
</tbody>
</table>

	<p><?php echo $this->tag->linkTo(array('accounts', 'Accounts &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('reminder', 'Reminder &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('summary', 'Summary &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('insight', 'Insight &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('plan', 'Plan &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('settings', 'Settings &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('logout', 'Logout &raquo;')); ?></p>
</center>
