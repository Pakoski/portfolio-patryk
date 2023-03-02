<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($projet as $projets): ?>
        <tr>
            <!-- Table Row -->
            <td>
                <?= $projets->getId() ?>
            </td>
            <td>
                <img src="data:image/jpeg;base64,<?= base64_encode($projets->getImage()) ?>"  height="150px" width="150px"> 
            </td>
            <td>
                <?= $projets->getTitre() ?>
            </td>
            <td>
                <?= $projets->getDescription() ?>
            </td>
            <td>
                <a href="<?= lien("projet", "modifier", $projets->getId()) ?>">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="<?= lien("projet", "supprimer", $projets->getId()) ?>">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>

    </tfoot>
</table>