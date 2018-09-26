<?php

namespace System;

use mysqli;

abstract class Connection {

    protected $conn;

    protected function connect() {

        $host = "localhost";
        $user = "root";
        $passwd = "root";
        $database = "system";

        $this->conn = new mysqli($host, $user, $passwd, $database);

        if ($this->conn->connect_errno) {
            throw new Exception("Failed to Connect to MySql: ("
            . $mysqli->connect.errno . ")"
            . $mysqli->connect_error);
        }
    }

}
