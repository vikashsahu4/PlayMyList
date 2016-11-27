
<?php echo $this->getContent(); ?>

<div class="row">

        <div class="page-header">
            <h2>Log In</h2>

        <?php echo $this->tag->form(array('login/start', 'role' => 'form')); ?>
            <fieldset>
                <div class="form-group">
                    <label for="email">Username/Email</label>
                    <div class="controls">
                        <?php echo $this->tag->textField(array('email', 'class' => 'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="controls">
                        <?php echo $this->tag->passwordField(array('password', 'class' => 'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $this->tag->submitButton(array('Login', 'class' => 'btn btn-primary btn-large')); ?>
                </div>
            </fieldset>
        </form>
    </div>
</div>
