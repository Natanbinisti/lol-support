<?php

namespace App\Repository;

use App\Entity\Support;
use Core\Attributes\TargetEntity;
use Core\Repository\Repository;

#[TargetEntity(name: Support::class)]
class SupportRepository extends Repository
{
    public function save(Support $support)
    {
        $query = $this->pdo->prepare("INSERT INTO $this->tableName SET name = :name, type = :type, difficulty = :difficulty");

        $query->execute([
            "name"=>$support->getName(),
            "type"=>$support->getType(),
            "difficulty"=>$support->getDifficulty(),
        ]);


    }
}
