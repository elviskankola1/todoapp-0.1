<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>


<a href="<?php echo site_url('welcome/addTask'); ?>">CREER UNE TASK</a>
<h1><?php echo $nbtask; ?> Tache(s)</h1><hr>
<?php if ($task):?>
<?php foreach ($task as $value):?>
	<p><?php echo $value->description; ?>     <?php echo $value->date_debut; ?>     /    <?php echo $value->date_fin; ?></p>
	<?php echo $this->session->satisfaction; ?>
<?php endforeach; ?>
<?php else:?>
	<h2>Aucune Tache</h2>
<?php endif; ?>
</body>
</html>