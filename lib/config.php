<?php
    $jsonConfigFile = "conf.json";

    function getConfArray() {
        global $jsonConfigFile;
        return json_decode(file_get_contents($jsonConfigFile), true);
    }

    function getConfValue($tag) {
        $confArray = getConfArray();
        return $confArray[$tag];
    }

    function setConfValue($tag, $value) {
        global $jsonConfigFile;
        $confArray = getConfArray();
        $confArray[$tag] = $value;
        writeFile($jsonConfigFile, json_encode($confArray));
    }

    function createEmptyConf($fileName) {
        $emptyArray = array("isInit" => false,
                            "dataBaseHost" => "",
                            "dataBaseName" => "",
                            "dataBaseUsername" => "",
                            "dataBasePassword" => "",
                            "panelUsername" => "admin",
                            "panelPassword" => "admin");
        writeFile($fileName, json_encode($emptyArray));
    }

    function initConf() {
        global $jsonConfigFile;
        if (!file_exists($jsonConfigFile)) {
            createEmptyConf($jsonConfigFile);
            return false;
        } else if (!getConfValue("isInit")) {
            return false;
        }
        return true;
    }

    function writeFile($fileName, $content) {
        $file = fopen($fileName, "w") or die("Unable to open file!");
        fwrite($file, $content);
        fclose($file);
    }
?>