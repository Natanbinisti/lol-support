<h1>Les supports</h1>

<?php foreach ($supports as $support): ?>

    <div class="border border-success">

        <h2>Name : <?= $support->getName() ?></h2>
        <p><strong>Type : <?= $support->getType() ?> </strong></p>
        <p>Diffculté : <?= $support->getDifficulty() ?> </p>

        <a class="btn btn-primary" href="?type=support&action=show&id=<?= $support->getId() ?>">Lien vers le sport</a>
        <a class="btn btn-danger" href="?type=support&action=delete&id=<?= $support->getId() ?>">Supprimer</a>


    </div>


<?php endforeach; ?>