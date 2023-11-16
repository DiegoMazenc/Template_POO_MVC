<?php
namespace App\Models;
use App\Models\AbstractTable;
use DateTime;

class Picture extends AbstractTable
{
  
    private ?string $title = null;
    private ?string $description = null;
    private ?string $src = null;
    private ?string $author = null;



    public function setTitle(?string $title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setDescription(?string $description){
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setSrc(?string $src){
        $this->src = $src;
    }

    public function getSrc(){
        return $this->src;
    }

    public function setAuthor(?string $author){
        $this->author = $author;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function dataPicture(){
        $dataPicture = [
            $this->title,
            $this->description,
            $this->src,
            $this->author,
            $this->id
        ];
        return $dataPicture;
    }

    

    public function validate() : array
    {
        $errors = [];
        /**
         * Pléthore de vérifications dans tous les sens
         */
        // Si le nom est inférieur à 3 caractères => error
        if (empty($this->title)){
            $errors[] = "Le champs Titre est obligatoire, merci.";
        }
        // Si l'email n'est pas bien formé => error
        if (empty($this->description)){
            $errors[] = "Le champs Description est obligatoire, merci.";
        }
        // Si le mot de passe est inférieur à 3 caractères => error
        if (empty($this->src)){
            $errors[] = "Le champs Source est obligatoire, merci.";
        }

        if (empty($this->author)){
            $errors[] = "Le champs Nom est obligatoire, merci.";
        }
        return $errors;
    }

    
}