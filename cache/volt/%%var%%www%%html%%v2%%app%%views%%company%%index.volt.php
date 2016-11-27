<?php echo $this->getContent(); ?>

<?php echo $this->tag->form(array('company/update', 'id' => 'companyForm', 'onbeforesubmit' => 'return false')); ?>

<fieldset>
	


		   <?php echo $form->label('cname'); ?>
		
		   <?php echo $form->render('cname'); ?>
	
	</br>
	
		 <?php echo $form->label('ctype'); ?>
		
		 <?php echo $form->render('ctype'); ?>
		
	</br>

 		 <?php echo $form->label('caddress'); ?>
		
		 <?php echo $form->render('caddress'); ?>
		
	</br>

	
		 <?php echo $form->label('ccity'); ?>
		
		 <?php echo $form->render('ccity'); ?>
		
	</br>

		
		 <?php echo $form->label('cstate'); ?>
		
		 <?php echo $form->render('cstate'); ?>
		
	</br>

	
		 <?php echo $form->label('ccountry'); ?>
		
		 <?php echo $form->render('ccountry'); ?>
		
	</br>

	
		 <?php echo $form->label('czip'); ?>
		
		 <?php echo $form->render('czip'); ?>
		
	</br>

	<div class="form-actions">
            <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-primary btn-large', 'onclick' => 'return Company.validate();')); ?>
        </div>


</fieldset>
</form>
