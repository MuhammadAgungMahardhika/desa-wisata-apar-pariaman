<?php


namespace App\Models;

use CodeIgniter\Model;

class reviewModel extends Model
{
    protected $table = 'review_atraction';
    protected $primaryKey = 'id';
    protected $atraction_id = 'atraction_id';
    public function getLikes($id)
    {
        $query = $this->db->table($this->table)
            ->select('sum(likes) as likes')
            ->where($this->atraction_id, $id)
            ->get()->getRow();
        return $query;
    }

    public function addLikes($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
        // return 'oke';
    }
    public function getComment($id)
    {
    }
}