<?php
namespace App\Models;

use App\Services\Database;

class UserManager
{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function insert($data=[])
    {
        $addUser = $this->db->query("INSERT INTO user (name, email, password) VALUES (?,?,?)",$data);
        return $addUser;
    }

    public function getAll($nb=null)
    {
        $limit = !is_null($nb) ? "LIMIT " . $nb : "";
        $selectUsers = [];
        $selectUsers = $this->db->selectAll("SELECT * from user ORDER BY id DESC ". $limit);
        return $selectUsers;
    }

}