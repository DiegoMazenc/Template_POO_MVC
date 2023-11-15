<?php
namespace App\Controllers;

class Controller{
    public function render($templatePath,$data){
        //Déclencher l'ouverture de la mémoir tampon
        ob_start();
        //On inject les éléments de template_home dans la mémoire tampon
        include $templatePath;
        //On stock la mémoire tampon dans une variable appelé dans le layout
        $template = ob_get_clean();

        include "./views/layout.phtml";

    }
}