
<?php echo $this->getContent(); ?>
<center>
<h2> Import </h2>
    <p><?php echo $this->tag->linkTo(array('import/transactionstemplate', 'Download Transactions Template &raquo;')); ?></p>

<?php echo $this->tag->form(array('import/transactions', 'enctype' => 'multipart/form-data', 'method' => 'post', 'onbeforesubmit' => 'return false')); ?>
<label for="name">Enter the file to import</label> 
<?php echo $this->tag->fileField(array('filename', 'size' => 50, 'placeholder' => 'Enter the File')); ?>
<?php echo $this->tag->submitButton(array('Upload')); ?>
<?php echo $this->tag->endForm(); ?>

<?php $v168081644850587993581iterator = $dataarray; $v168081644850587993581incr = 0; $v168081644850587993581loop = new stdClass(); $v168081644850587993581loop->length = count($v168081644850587993581iterator); $v168081644850587993581loop->index = 1; $v168081644850587993581loop->index0 = 1; $v168081644850587993581loop->revindex = $v168081644850587993581loop->length; $v168081644850587993581loop->revindex0 = $v168081644850587993581loop->length - 1; ?><?php foreach ($v168081644850587993581iterator as $datas) { ?><?php $v168081644850587993581loop->first = ($v168081644850587993581incr == 0); $v168081644850587993581loop->index = $v168081644850587993581incr + 1; $v168081644850587993581loop->index0 = $v168081644850587993581incr; $v168081644850587993581loop->revindex = $v168081644850587993581loop->length - $v168081644850587993581incr; $v168081644850587993581loop->revindex0 = $v168081644850587993581loop->length - ($v168081644850587993581incr + 1); $v168081644850587993581loop->last = ($v168081644850587993581incr == ($v168081644850587993581loop->length - 1)); ?>
		<?php if ($v168081644850587993581loop->first) { ?>
		<?php echo $this->tag->form(array('import/transactionsimport', 'enctype' => 'multipart/form-data', 'method' => 'post', 'onbeforesubmit' => 'return false')); ?>
		<input type="hidden" name="dataarray" value='<?php echo (json_encode($dataarray)); ?>'/>
		<table border="2" onload="xyz()">
			<thead>
			<tr>
			<?php $res=count($datas);
		for($i=0;$i<$res;$i++)
		{
			echo "<td><select name='first".$i."' onchange='checkDuplicates()'>";
			for($j=0;$j<$res;$j++)
			{
				if($j==$i)
			    	echo "<option value='".$j."' selected>".$datas[$j]."</option>";
				else
				echo "<option value='".$j."' >".$datas[$j]."</option>";
			}
			echo "</select></td>";
		}?>
			</tr>
			</thead>
		    	<tbody> 
		<?php } else { ?>
	    <tr>
	    <?php foreach ($datas as $data) { ?>
            <td><?php echo $data; ?></td>
	    <?php } ?>
            </tr>
		<?php } ?>
		<?php if ($v168081644850587993581loop->index == 15) { ?>
			</tbody>
			</table>
			<span id="saves"></span> 
			<?php break; ?>
   		<?php } ?>
		<?php if ($v168081644850587993581loop->last) { ?>
			</tbody>
			</table>
			<span id="saves"></span> 
   		<?php } ?>
<?php $v168081644850587993581incr++; } ?>

</center>

<script>
function xyz() {
	var x=document.getElementById("saves");
	x.innerHTML="<input type='submit' value='Import'></input></form>";
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
	x.innerHTML="<input type='submit' value='Import'></input></form>";
      selected[current] = true;
 	}
 }
  return true;
}
</script>
