<form action="<?php echo site_url('welcome/addTask'); ?>" method="POST">
		<input type="text" name="description" value="<?php echo set_value('description'); ?>"><br>
		<b style="color:red"><?php echo form_error('description'); ?></b>
		<input type="date" name="datedebut" value="<?php echo set_value('datedebut'); ?>"><br>
		<b style="color:red"><?php echo form_error('datedebut'); ?></b>
		<input type="date" name="datefin" value="<?php echo set_value('datefin'); ?>"><br>
		<b style="color:red"><?php echo form_error('datefin'); ?></b>
		<input type="submit" value="SEND">
</form>