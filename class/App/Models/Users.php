<?php

namespace App\Models;

use App\Models\Table;
use DateTime;

class Users extends Table
{
    private ?int $admin = null
    private ?int $id_photo = null
    private ?string $firstname = null
    private ?string $name = null
    private ?string $pseudo = null
    private ?string $gender = null
    private ?string $mail = null
    private ?string $password = null
    private ?string $src_photo = null
    private ?string $src_banner = null
    private ?\DateTime $date_create = null

    public function setAdmin(?int $admin){
        $this->admin = $admin;
    }

    public function getAdmin(?int $admin){
        return $this->admin;
    }

    public function setIdPhoto(?int $id_photo){
        $this->id_photo = $id_photo;
    }

    public function getIdPhoto(?int $id_photo){
        return $this->id_photo;
    }

    public function setFirstname(?string $firstname){
        $this->firstname = $firstname;
    }

    public function getFirstname(?string $firstname){
        return $this->firstname;
    }

    public function setName(?string $name){
        $this->name = $name;
    }

    public function getName(?string $name){
        return $this->name;
    }

    public function setPseudo(?string $pseudo){
        $this->pseudo = $pseudo;
    }

    public function getPseudo(?string $pseudo){
        return $this->pseudo;
    }
    
    public function setPseudo(?string $gender){
        $this->gender = $gender;
    }

    public function getPseudo(?string $gender){
        return $this->gender;
    }

    public function setMail(?string $mail){
        $this->mail = $mail;
    }

    public function getMail(?string $mail){
        return $this->mail;
    }

    public function setPassword(?string $password){
        $this->password = $password;
    }

    public function getPassword(?string $password){
        return $this->password;
    }

    public function setSrcPhoto(?string $src_photo){
        $this->src_photo = $src_photo;
    }

    public function getSrcPhoto(?string $src_photo){
        return $this->src_photo;
    }

    public function setSrcBanner(?string $src_banner){
        $this->src_banner = $src_banner;
    }

    public function getSrcBanner(?string $src_banner){
        return $this->src_banner;
    }

    public function setDateCreate(?\DateTime $date_create){
        $this->date_create = $date_create;
    }

    public function getDateCreate(?\DateTime $date_create){
        return $this->date_create;
    }

}


    // private $db;

    // public function __construct(){
    //     $this->db = new Database();
    // }
    
    // //====LOG====\\
    // public static function usersList()
    // {
    //     $db = new Database();
    //     $users =  $db->selectAll('SELECT * FROM users');
    //     return $users;
    // }

    // public static function userInfos($id)
    // {
    //     $db = new Database();
    //     $users =  $db->selectOne('SELECT * FROM users WHERE id=?',[$id]);
    //     return $users;
    // }


    // //Inscription
    // public static function inscription($firstname, $name, $pseudo, $gender, $mail, $hash)
    // {
    //     $db = new Database();
    //     $db->actionDB('INSERT INTO users (firstname,name,pseudo,gender,mail,password) VALUES(?,?,?,?,?,?)',[$firstname, $name, $pseudo, $gender, $mail, $hash]);
    //     return true;
    // }

    //Connexion
    // public static function connexionPseudo($pseudo)
    // {
    //     $db = connectDB();

    //     $sql = $db->prepare('SELECT * FROM users WHERE pseudo = ?');
    //     $sql->execute([$pseudo]);
    //     $user = $sql->fetch(PDO::FETCH_ASSOC);
    //     return $user;
    // }

    // //Photo USER
    // public static function photoProfil($id)
    // {
    //     $db = connectDB();
    //     $sql = $db->prepare("SELECT *, photo.src AS photo_src, users.pseudo AS user_pseudo, users.id AS user_id FROM users INNER JOIN photo ON photo.id = users.id_photo WHERE users.id=$id");
    //     $sql->execute();
    //     $photo = $sql->fetch(PDO::FETCH_ASSOC);
    //     return $photo;
    // }

    // //====SETTING====\\

    // //charger info User
    // public static function getUser($id)
    // {
    //     $db = connectDB();
    //     $sql = $db->prepare("SELECT * FROM users WHERE id = $id ");
    //     $sql->execute();
    //     $user = $sql->fetch(PDO::FETCH_ASSOC);
    //     return $user;
    // }

    // public static function updateUser($new_firstname, $new_name, $new_pseudo, $new_gender, $new_mail , $id)
    // {
    //     $db = connectDB();
    //     $sql = $db->prepare("UPDATE users SET firstname=?, name=?, pseudo=?, gender=?, mail=? WHERE id = ?");
    //     $sql->execute(array($new_firstname, $new_name, $new_pseudo, $new_gender, $new_mail , $id));
    //     return true;
    // }

    // public static function updateAdmin($admin,$id)
    // {
    //     $db = connectDB();
    //     $sql = $db->prepare("UPDATE users SET admin=? WHERE id =? ");
    //     $sql->execute([$admin,$id]);
    //     $user = $sql->fetch(PDO::FETCH_ASSOC);
    //     return $user;
    // }
