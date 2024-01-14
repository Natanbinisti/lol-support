
<div class="border border-success>

    <h2>Name : <?= $support->getName() ?></h2>
    <p><strong>Type : <?= $support->getType() ?> </strong></p>
    <p>Difficulté : <?= $support->getDifficulty() ?> </p>

    <a class="btn btn-primary" href="?type=support&action=index">retour</a>
    <a class="btn btn-danger" href="?type=support&action=delete&id=<?= $support->getId() ?>">Supprimer</a>



</div>