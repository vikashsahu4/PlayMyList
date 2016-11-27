
<?php echo $this->getContent(); ?>
<center>
<div class="page-header">
    <h2>Add Tax information</h2>
</div>

<?php echo $this->tag->form(array('taxrate/add', 'id' => 'TaxrateForm', 'onbeforesubmit' => 'return false')); ?>

   <?php echo $form->label('Name'); ?>
         
                <?php echo $form->render('Name'); ?>

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
