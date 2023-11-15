<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Users;

class HomeController extends Controller{
    public function index(){
        $db = new Users();
        $user =  $db->usersList();
        $this->render('./views/template_home.phtml',[$user]);
        
    }

}