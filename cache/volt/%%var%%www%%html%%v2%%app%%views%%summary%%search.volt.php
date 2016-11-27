
<?php echo $this->tag->javascriptInclude('js/datetimepicker_css.js'); ?>
<?php for($i=0;$i<2;$i++) echo "</br>" ?>
<?php echo $this->getContent(); ?>
<center>
 <b>NB:</b> <font size="3">Click on the financial heads, Accounts, Dates & Customer/Vendors name to see how filtering works </font>

<?php for($i=0;$i<2;$i++) echo "</br>" ?>

<h2> Cash Summary </h2>

<?php for($i=0;$i<2;$i++) echo "</br>" ?>

<?php 
		$auth = $this->session->get('auth');
		$cid= $auth[cid];
?>

<form name='datepicker' action='<?php echo $_SERVER['REQUEST_URI'];?>/index' method='GET'>
<input type="Text" id="demo1" name="date" maxlength="25" size="8" onchange='datepicker.submit();' value='<?php echo $dt ?>'/>

<img src="img/cal.gif" onclick="javascript:NewCssCal('demo1','yyyymmdd')" style="cursor:pointer"/>

&nbsp; to &nbsp;

<input type="Text" id="demo2" name="date2" maxlength="25" size="8" onchange='datepicker.submit();' value='<?php echo $dt2 ?>'/>

<img src="img/cal.gif" onclick="javascript:NewCssCal('demo2','yyyymmdd')" style="cursor:pointer"/>

</br>
</br>

<table border="1" width="100%">
	    <tr>
            <td></td>
            <td><?php echo $this->tag->textField(array('Description', 'size' => 20, 'maxlength' => 30, 'value' => $tag)); ?></td>
            <td></td>
            <td></td>
            <td><?php echo $this->tag->select(
    array(
        "head",
        ChartOfAccounts::find("c_id=$cid AND (coa_head = 'Expense' OR coa_head ='Income')"),
        "using" => array("coa_id", "coa_name")
	,"value"=>$head,
	"useEmpty"=>true,
	"emptyText" => "Select a Financial head",
	"emptyValue" => "")
); ?></td>
	    <td><?php echo $this->tag->select(
    array(
        "account",
        ChartOfAccounts::find("c_id=$cid AND (coa_head = 'Bank' OR coa_head ='Equity' OR coa_head='Cash')"),
        "using" => array("coa_id", "coa_name")
    ,"value"=>$account,
	"useEmpty"=>true,
	"emptyText" => "Select an Account",
	"emptyValue" => "")
); ?></td>
	    <td><?php echo $this->tag->textField(array('corv', 'size' => 20, 'maxlength' => 30, 'value' => $corv)); ?></td>
	    <td><?php echo $this->tag->submitButton(array('Search')); ?></td>
            </tr>
	<thead>
	<tr>
	    <td>Date</td>
            <td>Description</td>
            <td>Received</td>
            <td>Spent</td>
            <td>Head</td>
	    <td>Account</td>
            <td>Customers/Vendors</td>
	    <td> Modify </td>
        </tr>
	</thead>
    	<tbody> 
	<?php foreach ($trans as $tra) { ?>
	    <tr>
            <td><?php echo $tra->t_date; ?></td>
            <td><?php echo $tra->t_tag; ?></td>
            <td><?php echo $tra->t_received; ?></td>
            <td><?php echo $tra->t_spent; ?></td>
            <td><?php echo $tra->t_type_expense; ?></td>
	    <td><?php echo $tra->account; ?></td>
	    <td><?php echo $tra->t_customer; ?></td>
	    <td><?php echo $this->tag->linkTo(array('summary/delete/' . $tra->t_id, 'X')); ?>
	    <?php echo $this->tag->linkTo(array('summary/edit/' . $tra->t_id, 'M')); ?>
	    <?php if ($tra->t_goal == 1) { ?>
		<?php echo $this->tag->linkTo(array('summary/makereal/' . $tra->t_id, 'R')); ?>
	    <?php } ?>
		</td>
            </tr>
	<?php } ?>
    </tbody>
</table>

</form>

</center>
