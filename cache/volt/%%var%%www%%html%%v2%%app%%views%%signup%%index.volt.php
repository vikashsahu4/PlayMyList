
<?php echo $this->getContent(); ?>
<center>
<div class="page-header">
    <h2>Create new User for Slick Account</h2>
</div>

<?php echo $this->tag->form(array('signup/index', 'id' => 'registerForm', 'onbeforesubmit' => 'return false')); ?>


  
      
            <?php echo $form->label('E-mail'); ?>
         
                <?php echo $form->render('E-mail'); ?>
</br>

            <?php echo $form->label('FName'); ?>
           
                <?php echo $form->render('FName'); ?>
                
</br>

            <?php echo $form->label('LName'); ?>
           
                <?php echo $form->render('LName'); ?>
                
</br>

	<?php echo $form->label('Trial_Days'); ?>

		<?php echo $form->render('Trial_Days'); ?>
</br>

        <div class="form-actions">
            <?php echo $this->tag->submitButton(array('Register', 'class' => 'btn btn-primary', 'onclick' => 'return SignUp.validate();')); ?>
            <p class="help-block">By signing up, you accept terms of use and privacy policy.</p>
        </div>

</center>

   
</form>
