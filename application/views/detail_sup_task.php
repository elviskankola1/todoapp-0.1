<?php foreach ($taskForId as $value):?>
    <h1>
        <?php echo $value->description; ?>
    </h1>
    </p>voulez-vous sup cette tache?</p>
    <a href="<?php echo site_url(); ?>">Annuler</a> <a href="<?php echo site_url('welcome/deleteOneTask/').$value->id; ?>">Supprimer</a>
<?php endforeach; ?>