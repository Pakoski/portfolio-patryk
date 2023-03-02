<?php if(isset($erreurs)) : ?>
    <?php foreach($erreurs as $champ => $message): ?>
        <div><?= $champ ?> : <?= $message ?></div>
    <?php endforeach ?>
<?php endif ?>

<h1>Modifier</h1>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control" required value="<?= !empty($msg) ? $msg->getNom() : "" ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?= $msg->getEmail() ?? "" ?>">
    </div>
    <div class="form-group">
        <label for="texte">Texte</label>
        <textarea name="texte" id="texte" class="form-control"><?= $msg->getTexte() ?? "" ?></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <button type="reset" class="btn btn-secondary">Effacer</button>
    </div>
</form>