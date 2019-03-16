
<?php foreach ($taskForId as $value):?>
<h2>
    <form action="<?php echo site_url('welcome/updateOneTask'); ?>" method="POST">
        <input type="text" value="<?php echo $value->description; ?>" name="description"><br>
        <input type="date" value="<?php echo $value->date_debut; ?>" name="debut"><br>
        <input type="date" value="<?php echo $value->date_fin; ?>" name="fin"><br>
        <input type="hidden" value="<?php echo $value->id; ?>" name="id"><br>
        <input type="submit" value="UPDATE">
    </form>
</h2>
<?php endforeach; ?>