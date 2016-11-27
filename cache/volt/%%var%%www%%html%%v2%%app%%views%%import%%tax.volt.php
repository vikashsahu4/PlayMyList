
<?php echo $this->getContent(); ?>
<center>
<h2> Import </h2>
    <p><?php echo $this->tag->linkTo(array('import/taxtemplate', 'Download Tax Template &raquo;')); ?></p>

<?php echo $this->tag->form(array('import/tax', 'enctype' => 'multipart/form-data', 'method' => 'post', 'onbeforesubmit' => 'return false')); ?>
<label for="name">Enter the file to import</label> 
<?php echo $this->tag->fileField(array('filename', 'size' => 50, 'placeholder' => 'Enter the File')); ?>
<?php echo $this->tag->submitButton(array('Upload')); ?>
<?php echo $this->tag->endForm(); ?>

<?php $v106958483535143935541iterator = $dataarray; $v106958483535143935541incr = 0; $v106958483535143935541loop = new stdClass(); $v106958483535143935541loop->length = count($v106958483535143935541iterator); $v106958483535143935541loop->index = 1; $v106958483535143935541loop->index0 = 1; $v106958483535143935541loop->revindex = $v106958483535143935541loop->length; $v106958483535143935541loop->revindex0 = $v106958483535143935541loop->length - 1; ?><?php foreach ($v106958483535143935541iterator as $datas) { ?><?php $v106958483535143935541loop->first = ($v106958483535143935541incr == 0); $v106958483535143935541loop->index = $v106958483535143935541incr + 1; $v106958483535143935541loop->index0 = $v106958483535143935541incr; $v106958483535143935541loop->revindex = $v106958483535143935541loop->length - $v106958483535143935541incr; $v106958483535143935541loop->revindex0 = $v106958483535143935541loop->length - ($v106958483535143935541incr + 1); $v106958483535143935541loop->last = ($v106958483535143935541incr == ($v106958483535143935541loop->length - 1)); ?>
		<?php if ($v106958483535143935541loop->first) { ?>
		<table border="2" onload="xyz()">
			<thead>
			<tr>
			    <td><select name="first" onchange="checkDuplicates()">
		    <option value="0" selected>Tax Id</option>
		    <option value="1">Tax Name</option>
		    <option value="2">Tax </option>
		</select></td>
			    <td><select name="second" onchange="checkDuplicates()">
		    <option value="0">Coa Id</option>
		    <option value="1" selected>Coa Name</option>
		    <option value="2">Coa Type</option>
		</select></td>
			    <td><select name="third" onchange="checkDuplicates()">
		    <option value="0">Coa id</option>
		    <option value="1">Coa Name</option>
		    <option value="2" selected>Coa Type</option>
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
		<?php if ($v106958483535143935541loop->index == 15) { ?>
			</tbody>
			</table>
			<span id="saves"></span> 
			<?php break; ?>
   		<?php } ?>
		<?php if ($v106958483535143935541loop->last) { ?>
			</tbody>
			</table>
			<span id="saves"></span> 
   		<?php } ?>
<?php $v106958483535143935541incr++; } ?>

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
