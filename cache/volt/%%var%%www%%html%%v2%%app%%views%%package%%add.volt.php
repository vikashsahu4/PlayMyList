<?php echo $this->getContent(); ?>
<center>
</br>
</br>
</br>

<h1> Create new Package </h1>

<?php echo $this->tag->form(array('package/add', 'id' => 'TaxrateForm', 'onbeforesubmit' => 'return false')); ?>

Price : 
<?php echo $this->tag->textField(array('Price', 'size' => 30, 'maxlength' => 30, 'placeholder' => 'Price of Package')); ?>
</br>
</br>
Package Name :
<?php echo $this->tag->textField(array('package_name', 'size' => 30, 'maxlength' => 30, 'placeholder' => 'Name of Package')); ?>
</br>
</br>
Monthly :
<?php echo $this->tag->textField(array('monthly', 'size' => 30, 'maxlength' => 30, 'placeholder' => 'Monthly Price')); ?>
</br>
</br>
Annually :
<?php echo $this->tag->textField(array('annually', 'size' => 30, 'maxlength' => 30, 'placeholder' => 'Annuall Price')); ?>
</br>
</br>
Included Country :
<?php echo $this->tag->textField(array('inc_country', 'size' => 30, 'maxlength' => 30, 'placeholder' => 'Countries Included')); ?>
</br>
</br>
Excluded Country :
<?php echo $this->tag->textField(array('exc_country', 'size' => 30, 'maxlength' => 30, 'placeholder' => 'Countries Excluded')); ?>
</br>
</br>
<?php echo $this->tag->submitButton(array('Submit')); ?>

</form>
</center>
