<a href="index.php?c=articole&a=add">Adauga nou articol</a>
<br /><br />
<table cellpadding="2" cellspacing="0" border="1">
    <tr>
        <td>Titlu</td>
        <td>Body</td>        
        <td>Actions</td>
    </tr>
    <?php foreach($vars['articole'] as $articol): ?>
    <tr>
        <td><?php echo $articol['titlu']; ?></td>
        <td><?php echo $articol['body']; ?></td>        
        <td>
            <a href="index.php?c=articole&amp;a=edit&amp;id=<?php echo $articol['id_articol']; ?>">Edit</a> | 
            <a href="index.php?c=articole&amp;a=delete&amp;id=<?php echo $articol['id_articol']; ?>">Delete</a>            
        </td>
    </tr>   
    <?php endforeach; ?>    
</table>