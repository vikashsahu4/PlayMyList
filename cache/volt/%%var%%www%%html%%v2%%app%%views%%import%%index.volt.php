
<?php echo $this->getContent(); ?>
<center>
<h2> Import </h2>
    <p><?php echo $this->tag->linkTo(array('import/coa', 'Import Chart Of Accounts &raquo;')); ?></p>
    <p><?php echo $this->tag->linkTo(array('import/tax', 'Import Taxes Chart &raquo;')); ?></p>
    <p><?php echo $this->tag->linkTo(array('import/accounts', 'Import Accounts &raquo;')); ?></p>
    <p><?php echo $this->tag->linkTo(array('import/transactions', 'Import Transactions &raquo;')); ?></p>
    <p><?php echo $this->tag->linkTo(array('import/customers', 'Import Customers &raquo;')); ?></p>
