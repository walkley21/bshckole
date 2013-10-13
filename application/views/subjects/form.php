
<?php echo $record->status ?>

<form method="post" action="<?php echo $record->getFormAction()?>">
     
    <select name="status">
        <?php echo selectStatus($record->status) ?>
    </select>
    <input name="name"  value="<?php echo $record->name ?>"/>
    
    
    <input type="submit">
</form>
