
<?php echo $this->getContent(); ?>
<center>
<div class="page-header">
    <h2>Enter COA information</h2>
</div>

<?php echo $this->tag->form(array('chartsofaccounts/update', 'id' => 'ChartsofaccountsForm', 'onbeforesubmit' => 'return false')); ?>

   <?php echo $form->label('Name'); ?>
         
                <?php echo $form->render('Name'); ?>

</br>

<?php echo "Head  ".$this->tag->selectStatic(
    array(
        "head",
        array(
            "Income" => "Income",
            "Expense" => "Expense",
	    "Fixed Assets"=> "Fixed Assets",
	    "Direct Cost"=>"Direct Cost",
        )
    )
);?>

</br>

<?php echo "Input Account  ".$this->tag->selectStatic(
    array(
        "inputacc",
        array(
            "Received" => "Received",
            "Spent" => "Spent",
	    "Depreciation"=> "Depreciation",
        )
    )
);?>

</br>

<?php echo "Auto Tax  ".$this->tag->selectStatic(
    array(
        "autotax",
        array(
            "Tax on Consulting" => "Tax on Consulting",
            "Tax on Purchase" => "Tax on Purchase",
	    "Tax Exempt"=> " Tax Exempt",
        )
    )
);?>

</br>

   <?php echo $form->label('Explanation'); ?>
         
                <?php echo $form->render('Explanation'); ?>
</br>

   <?php echo $form->label('Tax_Percentage'); ?>
         
                <?php echo $form->render('Tax_Percentage'); ?>
</br>

<?php echo $this->tag->submitButton(array('Submit')); ?>
</center>
</form>
