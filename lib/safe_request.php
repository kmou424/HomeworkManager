<?php
    // safely get 'GET' parameter
    function _GET_S($name) {
        $URL = $_SERVER["REQUEST_URI"];
        if (strpos($URL, $name) != false) return $_GET[$name];
        else return null;
    }

    // safely get protocol with "://"
    function _GET_PROTOCOL_S() {
        return stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
    }
?>