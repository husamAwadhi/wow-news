<?php 

namespace App\Model;

use App\Model\Model;


class Home extends Model{

    protected $table = 'posts';
    protected $key = 'id';

    public function get($id) : array
    {
        return [];
    }

    public function getWhere($where = '1=1') : array
    {
        return $this->fetchArray("SELECT * FROM `{$this->table}` WHERE $where");
    }
}