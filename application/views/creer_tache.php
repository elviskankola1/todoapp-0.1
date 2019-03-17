<form action="<?php echo site_url('welcome/addTask'); ?>" method="POST">
		<input type="text" name="description" value="<?php echo set_value('description'); ?>"><br>
		<?php echo form_error('description'); ?>
		<input type="date" name="datedebut" value="<?php echo set_value('datedebut'); ?>"><br>
		<?php echo form_error('datedebut'); ?>
		<input type="date" name="datefin" value="<?php echo set_value('datefin'); ?>"><br>
		<?php echo form_error('datefin');?>
		<input type="submit" value="SEND">
</form>