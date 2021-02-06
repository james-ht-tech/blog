<?php

echo "test";
class DAO
{
    private $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $db = "blog";
    private $con = "";
    function __construct()
    {
        $this->con = new mysqli($this->host, $this->user, $this->password, $this->db);
    }
    function insert($query)
    {
        return $this->con->query($query);
    }
    function delete($id, $table)
    {
        $query = "DELETE FROM " . $table . " WHERE ID=" . $id;
        return $this->con->query($query);
    }
    function update($query)
    {
        return $this->con->query($query);
    }
    function selectAll($table)
    {
        $query = "SELECT * from " . $table;
        return $this->con->query($query);
    }
    function find($id, $table)
    {
        $query = "SELECT * from " . $table. " WHERE id=".$id;
        return $this->con->query($query);
    }
}
