<a href="index.php?c=articole&a=list">Inapoi la lista de articole</a>
<br /><br />
<form name="updateArticol" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
    <table>
        <tr>
            <td><label for="Articol['titlu']">Titlu</label></td>
            <td><input type="text" name="Articol[titlu]" id="Articol[titlu]" value="<?php echo isset($_POST['Articol']['titlu'])? $_POST['Articol']['titlu']:$vars['articol']['titlu']; ?>" /></td>
        </tr>
        <tr>
            <td><label for="Articol['body']">Body</label></td>
            <td>
                <textarea name="Articol[body]" id="Articol[body]"><?php echo isset($_POST['Articol']['body'])? $_POST['Articol']['body']:$vars['articol']['body']; ?></textarea>
            </td>
        </tr>        
        <tr>
            <td><input type="submit" name="Articol[saveArticol]" value="Update" /></td>
            <td>&nbsp;</td>
        </tr>
    </table>    
</form>