<?php echo $this->getContent(); ?>

<div class="page-header">
            <h2>Reset password</h2>

<?php echo $this->tag->form(array('reset/update', 'id' => 'resetpassForm', 'onbeforesubmit' => 'return false')); ?>

<fieldset>
		
		   <?php echo $form->render('uid'); ?>

		   <?php echo $form->label('password'); ?>
		
		   <?php echo $form->render('password'); ?>
	
	</br>
	
		 <?php echo $form->label('repeatPassword'); ?>
		
		 <?php echo $form->render('repeatPassword'); ?>
		
	</br>



	<div class="form-actions">
            <?php echo $this->tag->submitButton(array('Submit', 'class' => 'btn btn-primary btn-large')); ?>
        </div>


</fieldset>
</form>
