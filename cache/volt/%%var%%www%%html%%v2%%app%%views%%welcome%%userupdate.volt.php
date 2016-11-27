<?php echo $this->getContent(); ?>

<?php echo $this->tag->form(array('welcome/userupdate', 'id' => 'userdetailForm', 'onbeforesubmit' => 'return false')); ?>

<fieldset>
	


		   <?php echo $form->label('ufname'); ?>
		
		   <?php echo $form->render('ufname'); ?>
	
			</br>
	
		   <?php echo $form->label('ulname'); ?>
		
		   <?php echo $form->render('ulname'); ?>
		
			</br>

 		   <?php echo $form->label('email'); ?>
		
		   <?php echo $form->render('email'); ?>
		
			</br>

	
	     	   <?php echo $form->label('uphno'); ?>
		
		   <?php echo $form->render('uphno'); ?>
		
		
			</br>

	<div class="form-actions">
            <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-primary btn-large', 'onclick' => 'return Userdetial.validate();')); ?>
        </div>


</fieldset>
</form>
