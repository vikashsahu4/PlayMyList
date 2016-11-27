
<?php echo $this->getContent(); ?>
<?php echo $this->tag->javascriptInclude('js/datetimepicker_css.js'); ?>
<center>



<?php echo $this->tag->form(array('summary/edit', 'method' => 'post')); ?>
<?php echo $this->tag->hiddenField(array('taxid', 'value' => $tra->t_id)); ?>
<div class="row">
        <h2> Working </h2>
		<?php echo $this->tag->radioField(array('Spentrcvd', 'id' => null, 'value' => 'spent1', 'checked' => true)); ?>
		SPENT (on general business running or doing sales)
		<?php echo $this->tag->radioField(array('Spentrcvd', 'id' => null, 'value' => 'spent2')); ?>
		SPENT (if purchased something to sell later) 
		<?php echo $this->tag->radioField(array('Spentrcvd', 'id' => null, 'value' => 'received')); ?>
		RECEIVED

</br>

<?php if($tra->t_spent==0)
		{ 
		$amt=$tra->t_received;
		}
	else
	{
	$amt=$tra->t_spent;
}
 ?>

<?php echo $this->tag->textField(array('Amount', 'size' => 20, 'maxlength' => 30, 'placeholder' => 'Amount *', 'value' => $amt)); ?> (<i> Without Tax </i>)

	<?php 
		$auth = $this->session->get('auth');
		$cid= $auth[cid];
				?>


		<?php echo $this->tag->select(
    array(
        "toe",
        ChartOfAccounts::find("c_id=$cid AND (coa_head = 'Expense' OR coa_head ='Income')"),
        "using" => array("coa_id", "coa_name")
    ,"value"=>$tra->t_type_expense)
); ?>

<?php echo $this->tag->textField(array('Description', 'size' => 20, 'maxlength' => 30, 'placeholder' => 'Describe and #tag', 'value' => $tra->t_tag)); ?>

</br>

<?php echo $this->tag->textField(array('scontact', 'size' => 20, 'maxlength' => 30, 'placeholder' => 'Customer/Vendor', 'value' => $tra->t_customer)); ?>

		<?php echo $this->tag->select(
    array(
        "accounts",
        ChartOfAccounts::find("c_id=$cid AND (coa_head = 'Bank' OR coa_head ='Equity' OR coa_head='Cash')"),
        "using" => array("coa_id", "coa_name")
    ,"value"=>$tra->account)
); ?>

 <?php $dt=date('Y-m-d'); ?> 

<input type="Text" id="demo1" name="date" maxlength="25" size="8" value= "<?php echo substr($tra->t_date,0,10); ?>" />
<img src="img/cal.gif" onclick="javascript:NewCssCal('demo1','yyyymmdd')" style="cursor:pointer"/>

<?php echo $this->tag->submitButton(array('Add Amount')); ?>

</br>
	


	
		<input type="radio" name="Taxexin" value="EXC" <?php if(strcmp($tra->tax,"EXC")==0) {echo "checked";}?>>Tax Excluded
		<input type="radio" name="Taxexin" value="INC" <?php if(strcmp($tra->tax,"INC")===0) {echo "checked";}?>>Tax Included

<?php foreach ($taxes as $tax) { ?>
<?php $flag = 0; ?>
<?php foreach ($taxocc as $taxoc) { ?>
<?php if ($taxoc->tax_id == $tax->coa_id) { ?>
<?php $flag = 1; ?>
<?php break; ?>
<?php } ?>
<?php } ?>
<input type="checkbox" name="taxarray[]" value="<?php echo $tax->coa_id; ?>" <?php if ($flag == 1) { ?> checked="checked"   <?php } ?> /> <?php echo $tax->coa_tax_percent; ?>% <?php echo $tax->coa_name; ?>
<?php } ?>   

	<p><?php echo $this->tag->linkTo(array('accounts', 'Accounts &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('reminder', 'Reminder &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('summary', 'Summary &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('insight', 'Insight &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('plan', 'Plan &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('settings', 'Settings &raquo;')); ?></p>
	<p><?php echo $this->tag->linkTo(array('logout', 'Logout &raquo;')); ?></p>
</center>
</div>
