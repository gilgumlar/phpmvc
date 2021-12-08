<?php
class Dbtest_model
{
    private $table = 'buku_table';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllDataBuku()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
