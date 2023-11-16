<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Picture;
use App\Models\PictureManager;

class PictureController extends Controller
{
    public function index()
    {
        $picture = new Picture();
        $errors = [];
        if (isset($_POST['submit'])) {
            $picture->setTitle($_POST['title']);
            $picture->setDescription($_POST['description']);
            $picture->setSrc($_POST['src']);
            $picture->setAuthor($_POST['author']);

            $errors = $picture->validate();
            if (empty($errors)) {
                $pictureManager = new PictureManager();
                $dataPicture = $picture->dataPicture();
                $pictureManager->insert($dataPicture);

                echo "insertion OK";
                
            }
        }

        if (isset($_POST['update'])) {
            
            $picture->setTitle($_POST['title']);
            $picture->setDescription($_POST['description']);
            $picture->setSrc($_POST['src']);
            $picture->setAuthor($_POST['author']);
            $picture->setId($_POST['idPicture']);

            $errors = $picture->validate();
            if (empty($errors)) {
                $pictureManager = new PictureManager();
                $dataPicture = $picture->dataPicture();
                $pictureManager->update($dataPicture);
            }
        }

        if (isset($_POST['delete'])){
            $picture->setId($_POST['idPicture']);
            if (empty($errors)) {
                $pictureManager = new PictureManager();
                $pictureDelete = $picture->getId();
                $pictureManager->delete($pictureDelete);
                
            }
        };

        $pictureManager = new PictureManager();
        $pictures= $pictureManager->getAll();

        $this->render('./views/template_picture.phtml', [
            '$_POST' => $_POST,
            'picture' => $picture,
            'errors' => $errors,
            'pictures' => $pictures
        ]);

        
    }
}
