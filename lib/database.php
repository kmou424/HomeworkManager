<?php
    function getDataBase($useConf) {
        $dataBaseHost = __getDataBaseConf('database_host', $useConf);
        $dataBaseUsername = __getDataBaseConf('database_username', $useConf);
        $dataBasePassword = __getDataBaseConf('database_password', $useConf);
        $dataBaseName = __getDataBaseConf('database_name', $useConf);
        return __connectDataBase($dataBaseHost, $dataBaseUsername, $dataBasePassword, $dataBaseName);
    }

    function __connectDataBase($dataBaseHost, $dataBaseUsername, $dataBasePassword, $dataBaseName) {
        $mysqli = new mysqli('p:' . $dataBaseHost, $dataBaseUsername, $dataBasePassword, $dataBaseName);
        if ($mysqli->connect_errno) {
            echo "错误: Connection failed: " . $mysqli->connect_error;
            return false;
        }
        $mysqli->set_charset("utf8");
        return $mysqli;
    }

    function __getDataBaseConf($tag, $useConf) {
        if ($useConf) return getConfValue($tag);
        else return $_POST[$tag];
    }
?>