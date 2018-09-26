<?php

namespace System;

use mysqli;

class User extends Connection {

    public function __construct() {
        $this->connect();
    }

    public function find() {
        $data = array();
        $results = $this->conn->query("SELECT * FROM login");

        $results->data_seek(0);
        while ($row = $results->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    
    public function findOne($id)
    {
        $sql = "select * from login where id = $id";
        $results = $this->conn->query($sql);
        
        if($results->num_rows){
            $results->data_seek[0];
            return $results->fetch_assoc();
        }
        
        return array();
    }

}
