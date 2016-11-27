<?php echo $this->tag->javascriptInclude('js/datetimepicker_css.js'); ?>
<?php for($i=0;$i<2;$i++) echo "</br>" ?>
<?php echo $this->getContent(); ?>
<center>
<?php for($i=0;$i<2;$i++) echo "</br>" ?>

<h2> Ledger </h2>

<?php for($i=0;$i<2;$i++) echo "</br>" ?>
</center>
<?php echo $this->tag->form(array('ledger/index', 'method' => 'post')); ?>
Select Originating Account
<?php echo $this->tag->select(array('origin', $accounts, 'using' => array('coa_id', 'coa_name'), 'useEmpty' => true, 'emptyText' => 'Please, choose one...', 'emptyValue' => '')); ?>
Select Receiving Account
<?php echo $this->tag->select(array('reciept', $accounts, 'using' => array('coa_id', 'coa_name'), 'useEmpty' => true, 'emptyText' => 'Please, choose one...', 'emptyValue' => '')); ?>
Amount: <?php echo $this->tag->textField(array('Amount', 'size' => 20, 'maxlength' => 30, 'placeholder' => 'Amount *')); ?>
Description: <?php echo $this->tag->textField(array('Description', 'size' => 20, 'maxlength' => 30, 'value' => '')); ?>
<?php $dt=date('Y-m-d'); ?> 
Date:
<input type="Text" id="demo1" name="date" maxlength="25" size="8" value= ' <?php echo $dt; ?> ' />
<img src="img/cal.gif" onclick="javascript:NewCssCal('demo1','yyyymmdd')" style="cursor:pointer"/>
<?php echo $this->tag->submitButton(array('Add Ledger')); ?>
</form>

<table border="1" width="100%">
	<thead>
	<tr>
	    <td>Date</td>
	    <td>Originating Account</td>
            <td>Received Account</td>
            <td>Amount</td>
            <td>Description</td>
        </tr>
	</thead>
    	<tbody> 
	<?php foreach ($ledger as $led) { ?>
	    <tr>
            <td><?php echo $led->date; ?></td>
            <td><?php echo $led->spent_account; ?></td>
            <td><?php echo $led->recieved_account; ?></td>
            <td><?php echo $led->recieved; ?></td>
            <td><?php echo $led->description; ?></td>
            </tr>
	<?php } ?>
    </tbody>
</table>
