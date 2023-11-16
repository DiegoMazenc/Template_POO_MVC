<?php
namespace App\Models;

use App\Services\Database;

class PictureManager
{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

   
    public function insert($data=[])
    {
        $addPic = $this->db->query("INSERT INTO picture (title, description, src, author) VALUES (?,?,?,?)",$data);
        return $addPic;
    }

    public function getAll($nb=null)
    {
        $limit = !is_null($nb) ? "LIMIT " . $nb : "";
        $pictures = [];
        $pictures = $this->db->selectAll("SELECT * from picture ORDER BY id DESC ". $limit);
        return $pictures;
    }

    public function getOneById($id=null)
    {
        $whereId = !is_null($id) ? "WHERE id=?" : "";
        $picture = [];
        $picture = $this->db->select("SELECT * from picture ". $whereId. "LIMIT 1",[$id]);
        return $picture;
    }


    public function delete($id=null)
    {
        if (!is_null($id)) {
        $this->db->query("DELETE FROM picture WHERE id=?",[$id]);
        return true;
        }
        return false;
    }

    public function update($data=[])
    {
        
        $updatepic = $this->db->query("UPDATE picture SET title=?, description=?, src=?, author=?  WHERE id=?",$data);
       
        return $updatepic;
        }
}