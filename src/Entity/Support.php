<?php

namespace App\Entity;

use Core\Attributes\Table;
use Core\Attributes\TargetRepository;
use Core\Repository\Repository;

#[TargetRepository(name: Repository::class)]
#[Table(name: "Support")]
class Support
{
    private int $id;
    private string $name;
    private string $type;
    private string $difficulty;

    public function getId()
    {
        return $this->id;
    }

    public function getDifficulty(): string
    {
        return $this->difficulty;
    }

    public function setDifficulty(string $difficulty): void
    {
        $this->difficulty = $difficulty;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}