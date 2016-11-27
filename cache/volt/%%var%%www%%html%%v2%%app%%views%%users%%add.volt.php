
<?php echo $this->getContent(); ?>
<center>
<div class="page-header">
    <h2>Add User</h2>
</div>

<?php echo $this->tag->form(array('users/add', 'id' => 'usersForm', 'onbeforesubmit' => 'return false')); ?>

   		<?php echo $form->label('Email'); ?>
         
                <?php echo $form->render('Email'); ?>
</br>

   		<?php echo $form->label('Position'); ?>
         
                <?php echo $form->render('Position'); ?>
</br>

<?php echo $this->tag->submitButton(array('Submit')); ?>
</center>
</form>
