<?php echo $this->getContent(); ?>

<center>
<h2> Plan Helper </h2>

<?php echo $this->tag->form(array('', 'id' => 'PlanForm', 'method' => 'get')); ?>

<?php echo Phalcon\Tag::form(array('plan', 'method' => 'get')); ?>

    <label for="type">Month</label>
   <?php
echo $this->tag->selectStatic(
    array(
        "status",
        array(
            "1" => "January",
            "2" => "February",
	    "3" => "March",
            "4" => "April",
	    "5" => "May",
            "6" => "June",
	    "7" => "July",
	    "8" => "August",
	    "9" => "September",
            "10" => "October",
	    "5" => "November",
	    "5" => "December",

        )
    )
);?>

<?php echo $form->label('Year'); ?>

		<?php echo $form->render('Year'); ?>


    <?php echo Phalcon\Tag::submitButton('Send'); ?>

<?php echo $this->tag->endForm(); ?>
