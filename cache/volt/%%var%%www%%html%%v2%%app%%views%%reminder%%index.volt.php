<?php echo $this->getContent(); ?>
<center>

<h2> Reminders </h2>

<?php echo $this->tag->form(array('reminder/add', 'method' => 'post', 'onbeforesubmit' => 'return false')); ?>

<?php echo $this->tag->javascriptInclude('js/datetimepicker_css.js'); ?>

<?php echo $this->tag->textField(array('Reminder', 'size' => 20, 'maxlength' => 30, 'placeholder' => 'What Should be Reminded?')); ?>

<input type="Text" id="demo1" name="date" maxlength="25" size="3"/>
<img src="img/cal.gif" onclick="javascript:NewCssCal('demo1','yyyymmmdd')" style="cursor:pointer"/>

<?php echo $this->tag->submitButton(array('Add')); ?>

<?php echo $this->tag->endForm(); ?>

<table border="2">
<thead>
<tr>
<td> Reminder</td>
<td> Date </td>
</tr>
</thead>
<tbody>
<?php foreach ($rem1 as $rem) { ?>
<tr>
<td> <?php echo $rem->msg; ?> </td>
<td> <?php echo $rem->rem_date; ?> </td>
<td> <?php echo $this->tag->linkTo(array('reminder/delete/' . $rem->rem_id, 'Delete')); ?> </td>
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
