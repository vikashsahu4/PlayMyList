
<?php echo $this->getContent(); ?>
<?php echo $this->tag->javascriptInclude('js/datetimepicker_css.js'); ?>
<center>

<?php echo $this->tag->form(array('transaction/add', 'method' => 'post')); ?>
<div class="row">
        <h2> Working </h2>
		<?php echo $this->tag->radioField(array('Spentrcvd', 'id' => null, 'value' => 'spent1', 'checked' => true)); ?>
		SPENT (on general business running or doing sales)
		<?php echo $this->tag->radioField(array('Spentrcvd', 'id' => null, 'value' => 'spent2')); ?>
		SPENT (if purchased something to sell later) 
		<?php echo $this->tag->radioField(array('Spentrcvd', 'id' => null, 'value' => 'received')); ?>
		RECEIVED

</br>

<?php echo $this->tag->textField(array('Amount', 'size' => 20, 'maxlength' => 30, 'placeholder' => 'Amount *')); ?> (<i> Without Tax </i>)

	<?php 
		$auth = $this->session->get('auth');
		$cid= $auth[cid];
				?>


		<?php echo $this->tag->select(
    array(
        "toe",
        ChartOfAccounts::find("c_id=$cid AND (coa_head = 'Expense' OR coa_head ='Income')"),
        "using" => array("coa_id", "coa_name")
    )
); ?>

<?php echo $this->tag->textField(array('Description', 'size' => 20, 'maxlength' => 30, 'placeholder' => 'Describe and #tag')); ?>

</br>

<?php echo $this->tag->textField(array('scontact', 'size' => 20, 'maxlength' => 30, 'placeholder' => 'Customer/Vendor')); ?>

		<?php echo $this->tag->select(
    array(
        "accounts",
        ChartOfAccounts::find("c_id=$cid AND (coa_head = 'Bank' OR coa_head ='Equity' OR coa_head='Cash')"),
        "using" => array("coa_id", "coa_name")
    )
); ?>

 <?php $dt=date('Y-m-d'); ?> 

<input type="Text" id="demo1" name="date" maxlength="25" size="8" value= ' <?php echo $dt; ?> ' />
<img src="img/cal.gif" onclick="javascript:NewCssCal('demo1','yyyymmdd')" style="cursor:pointer"/>

<?php echo $this->tag->submitButton(array('Add Amount')); ?>

</br>

		<?php echo $this->tag->radioField(array('Taxexin', 'id' => null, 'value' => 'EXC')); ?>
		Tax Excluded
		<?php echo $this->tag->radioField(array('Taxexin', 'id' => null, 'value' => 'INC')); ?>
		Tax Included


		<?php foreach ($taxes as $tax) { ?>
		 <?php echo Phalcon\Tag::checkField(array("taxarray[]", "value" => "$tax->coa_id")).$tax->coa_name." (".$tax->coa_tax_percent.")"; ?>
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
