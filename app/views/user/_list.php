<table cellpadding="2" cellspacing="0" border="1">
    <tr>
        <td>Nume</td>
        <td>Prenume</td>
        <td>Email</td>
        <td>Actions</td>
    </tr>
    <?php foreach($vars['users'] as $user): ?>
    <tr>
        <td><?php echo $user['nume']; ?></td>
        <td><?php echo $user['prenume']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td>
            <a href="index.php?c=user&amp;a=edit&amp;id=<?php echo $user['id']; ?>">Edit</a> | 
            <a href="#delete" onclick="deleteUser(<?php echo $user['id']; ?>)">Delete</a>            
        </td>
    </tr>   
    <?php endforeach; ?>    
</table>