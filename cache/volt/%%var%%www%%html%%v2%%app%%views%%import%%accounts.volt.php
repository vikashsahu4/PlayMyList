
<?php echo $this->getContent(); ?>
<center>
<h2> Import </h2>
    <p><?php echo $this->tag->linkTo(array('import/accountstemplate', 'Download Accounts Template &raquo;')); ?></p>

<?php echo $this->tag->form(array('import/accounts', 'enctype' => 'multipart/form-data', 'method' => 'post', 'onbeforesubmit' => 'return false')); ?>
<label for="name">Enter the file to import</label> 
<?php echo $this->tag->fileField(array('filename', 'size' => 50, 'placeholder' => 'Enter the File')); ?>
<?php echo $this->tag->submitButton(array('Upload')); ?>
<?php echo $this->tag->endForm(); ?>

<?php $v67980669696851734131iterator = $dataarray; $v67980669696851734131incr = 0; $v67980669696851734131loop = new stdClass(); $v67980669696851734131loop->length = count($v67980669696851734131iterator); $v67980669696851734131loop->index = 1; $v67980669696851734131loop->index0 = 1; $v67980669696851734131loop->revindex = $v67980669696851734131loop->length; $v67980669696851734131loop->revindex0 = $v67980669696851734131loop->length - 1; ?><?php foreach ($v67980669696851734131iterator as $datas) { ?><?php $v67980669696851734131loop->first = ($v67980669696851734131incr == 0); $v67980669696851734131loop->index = $v67980669696851734131incr + 1; $v67980669696851734131loop->index0 = $v67980669696851734131incr; $v67980669696851734131loop->revindex = $v67980669696851734131loop->length - $v67980669696851734131incr; $v67980669696851734131loop->revindex0 = $v67980669696851734131loop->length - ($v67980669696851734131incr + 1); $v67980669696851734131loop->last = ($v67980669696851734131incr == ($v67980669696851734131loop->length - 1)); ?>
		<?php if ($v67980669696851734131loop->first) { ?>
		<table border="2" onload="xyz()">
			<thead>
			<tr>
			    <td><select name="first" onchange="checkDuplicates()">
		    <option value="0" selected>Account Id</option>
		    <option value="1">Account Name</option>
		    <option value="2">Account Type</option>
		</select></td>
			    <td><select name="second" onchange="checkDuplicates()">
		    <option value="0">Account Id</option>
		    <option value="1" selected>Account Name</option>
		    <option value="2">Account Type</option>
		</select></td>
			    <td><select name="third" onchange="checkDuplicates()">
		    <option value="0">Account id</option>
		    <option value="1">Account Name</option>
		    <option value="2" selected>Account Type</option>
		</select></td>
			</tr>
			</thead>
		    	<tbody> 
		<?php } else { ?>
	    <tr>
            <td><?php echo $datas[0]; ?></td>
            <td><?php echo $datas[1]; ?></td>
            <td><?php echo $datas[2]; ?></td>
            </tr>
		<?php } ?>
		<?php if ($v67980669696851734131loop->index == 15) { ?>
			</tbody>
			</table>
			<span id="saves"></span> 
			<?php break; ?>
   		<?php } ?>
		<?php if ($v67980669696851734131loop->last) { ?>
			</tbody>
			</table>
			<span id="saves"></span> 
   		<?php } ?>
<?php $v67980669696851734131incr++; } ?>

</center>

<script>
function xyz() {
	var x=document.getElementById("saves");
	x.innerHTML="<button type='submit' form='form1' value='Import'>Import</button>";
}
window.onload = xyz;
</script>
<script>
function checkDuplicates() {
  var selects = document.getElementsByTagName("select"),
      i,
      current,
      selected = {};
  for(i = 0; i < selects.length; i++){
    current = selects[i].selectedIndex;
    if (selected[current]) {
      alert("Each address type may not be selected more than once.");
	var x=document.getElementById("saves");
	x.innerHTML="Please check coloumn values. They are repeated.";
      return false;
    } else
	{
	var x=document.getElementById("saves");
	x.innerHTML="<input type='submit' form='form1' value='Import'></input>";
      selected[current] = true;
 	}
 }
  return true;
}
</script>
