<h1>Confirmation de la suppression du livre n°<?= $projet->getId() ?> ?</h1>

<ul class="list-group">
    <li class="list-group-item">
        <strong>Titre : </strong> <?= $projet->getTitre() ?>
    </li>
    <li class="list-group-item">
        <strong>Résumé : </strong> <?= $projet->getDescription() ?>
    </li>
    <li class="list-group-item">
        <strong>Image : </strong> <?= $projet->getImage() ?>
    </li>
</ul>

<form method="post">
<div class="d-flex justify-content-between">
        <button class="btn btn-success">Confirmer</button>
        <a href="<?= lien("projet","liste") ?>" class="btn btn-danger">Annuler</a>
    </div>
</form>
