<div class="mdui-container-fluid">
    <div class="nexmoe-item">
        <?php
            if ($_POST['database_host'] == null ||
                $_POST['database_name'] == null ||
                $_POST['database_username'] == null ||
                $_POST['database_password'] == null) {
                    header("Location:init.php?step=1&err=incom");
                } else {
                    echo "正在连接数据库...";
                    $mysqi = getDataBase(false);
                    if (!$mysqi) echo "\n连接失败!";
                    else {
                        echo "\n连接成功!";
                        $mysqi->close();
                        setConfValue('dataBaseHost', $_POST['database_host']);
                        setConfValue('dataBaseName', $_POST['database_name']);
                        setConfValue('dataBaseUsername', $_POST['database_username']);
                        setConfValue('dataBasePassword', $_POST['database_password']);
                        header("Location:init.php?step=3&db=true");
                    }
                }
        ?>
    </div>
</div>