<?php
    function connectDataBase() {
        $dataBaseHost = $_POST['database_host'];
        $dataBaseUsername = $_POST['database_username'];
        $dataBasePassword = $_POST['database_password'];
        $dataBaseName = $_POST['database_name'];
        $mysqli = new mysqli('p:' . $dataBaseHost, $dataBaseUsername, $dataBasePassword, $dataBaseName);
        if ($mysqli->connect_errno) {
            echo "错误: Connection failed: " . $mysqli->connect_error;
            return false;
        }
        $mysqli->set_charset("utf8");
        return $mysqli;
    }
?>