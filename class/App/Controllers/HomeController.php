<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\PictureManager;


class HomeController extends Controller{

    public function index(){
        $pic = new PictureManager();
        $data = $pic->getAll(3);
        $this->render('./views/template_home.phtml',[$data]);
    }

    public function new(){
        echo 'coucou';
    }

}