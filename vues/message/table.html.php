<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Texte</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($msg as $message): ?>
        <tr>
            <!-- Table Row -->
            <td>
                <?= $message->getId() ?>
            </td>
            <td>
                <?= $message->getNom() ?>
            </td>
            <td>
                <?= $message->getEmail() ?>
            </td>
            <td>
                <?= $message->getTexte() ?>
            </td>
            <td>
                <a href="<?= lien("msg", "supprimer", $message->getId()) ?>">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>

    </tfoot>
</table>