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
<h1><?php echo $nbtask; ?> Tache(s)</h1>
<h2><?php echo $this->session->satisfaction; ?></h2><hr>
<?php if ($task):?>
<?php foreach ($task as $value):?>
	<hr>
	<p><?php echo $value->description; ?>     <?php echo $value->date_debut; ?>     /    <?php echo $value->date_fin; ?></p>
	<a href="<?php echo site_url('welcome/deleteOneTask/').$value->id; ?>"><h2>X</h2></a>
	<a href="<?php echo site_url('welcome/detailTask/').$value->id; ?>"><h2>!~~</h2></a>
	<hr>
<?php endforeach; ?>
<?php else:?>
	<h2>Aucune Tache</h2>
<?php endif; ?>
</body>
</html>