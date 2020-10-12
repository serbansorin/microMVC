<script type="text/javascript">
    function deleteUser(id) {
        if (confirm('Sunteti sigur ca doriti sa stergeti?')) {
            jQuery.ajax({
                method: 'POST',
                url: 'index.php?c=user&a=delete',
                data: {id: id},
                success: function(data) {
                    jQuery('#listUsers').html(data);
                }
            });
        }
    }   
</script>

<a href="index.php?c=user&a=add">Adauga nou utilizator</a>
<br /><br />
<div id="listUsers">
<?php $this->renderPartial('_list', array('users' => $vars['users'])) ?>
</div>