
<html>
    <head>
       
    </head>
    <body>
	<?php echo $this->tag->linkTo(array('users/add', 'Add User')); ?></td>
	<table border="2">
	<thead>
	<tr>
	    <td>Name</td>
	    <td>Email</td>
            <td>Role</td>
        </tr>
	</thead>
    	<tbody> 
	<?php foreach ($rows as $row) { ?>
	    <tr>
            <td><?php echo $row->fname; ?></td>
	    <td><?php echo $row->email; ?></td>
	    <td><?php echo $row->role; ?></td>
            </tr>
	<?php } ?>
    </tbody>
</table>
    </body>
</html>

