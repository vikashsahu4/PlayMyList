<?php echo $this->getContent(); ?>
<center>
<h2> Add new Account </h2>

<?php echo $this->tag->form(array('accounts/add', 'method' => 'post', 'onbeforesubmit' => 'return false')); ?>
<label for="name">Name</label> 
<?php echo $this->tag->textField(array('Name', 'size' => 30, 'maxlength' => 30, 'placeholder' => 'Enter the Name')); ?>

<?php
echo $this->tag->selectStatic(
    array(
        "status",
        array(
            "Bank" => "Bank/Loan",
            "Equity" => "Owner's Personal Account",
	    "Cash" => "Cash",
        )
    )
);?>



<?php echo $this->tag->submitButton(array('Add')); ?>

<?php echo $this->tag->endForm(); ?>
</center>
