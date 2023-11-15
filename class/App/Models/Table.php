<?php
namespace App\Models;

/**
 * Abstract class Table
 * @package App\Models\Table
 */

abstract class Table
{
    //Typer avec ma syntaxe ?int $id = 
    protected ?int $id = null;

    public function __construct(?int $id = null)
    {
        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->$id;
    }

    public function setId(?int $id): void 
    {
        $this->id = $id;
    }
}