
<?php foreach ($taskForId as $value):?>
<h2>
    <form action="<?php echo site_url('welcome/updateOneTask'); ?>" method="POST">
        <input type="text" value="<?php echo $value->description; ?>" name="description"><br>
        <b style="color:red"><?php echo form_error('description'); ?></b>
        <input type="date" value="<?php echo $value->date_debut; ?>" name="debut" ><br>
        <b style="color:red"><?php echo form_error('debut'); ?></b>
        <input type="date" value="<?php echo $value->date_fin; ?>" name="fin"><br>
        <b style="color:red"><?php echo form_error('fin'); ?></b>
        <input type="hidden" value="<?php echo $value->id; ?>" name="id"><br>
        <input type="submit" value="UPDATE">
    </form>
</h2>
<?php endforeach; ?>