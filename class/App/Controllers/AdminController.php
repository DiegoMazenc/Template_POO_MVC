<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;
use App\Models\UserManager;
use App\Models\Picture;
use App\Models\PictureManager;

class AdminController extends Controller
{
    public function index()
    {
        // $users = new UserManager();
        // $selectUsers = $users->getAll();
        // $errors = [];
        $this->render('./views/template_admin.phtml',[
            // '$_POST' => $_POST,
            // 'selectUsers' => $selectUsers,
            // 'errors' => $errors
        ]);
    }

    public function adminusers()
    {
        $users = new UserManager();
        $selectUsers = $users->getAll();
        $errors = [];
        $this->render('./views/template_adminusers.phtml',[
            '$_POST' => $_POST,
            'selectUsers' => $selectUsers,
            'errors' => $errors
        ]);
    }

    public function adminarticles()
    {
        $picture = new PictureManager();
        $selectPicture = $picture->getAll();
        $errors = [];
        $this->render('./views/template_adminarticles.phtml',[
            '$_POST' => $_POST,
            'selectPicture' => $selectPicture,
            'errors' => $errors
        ]);
    }
}