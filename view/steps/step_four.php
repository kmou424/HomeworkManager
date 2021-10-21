<div class="mdui-container-fluid">
    <div class="nexmoe-item">
        <?php
            if ($_POST['panel_username'] != null) {
                setConfValue('panelUsername', $_POST['panel_username']);
            }

            if ($_POST['panel_password_first'] == $_POST['panel_password_second']) {
                if ($_POST['panel_password_first'] != null &&
                    $_POST['panel_password_second'] != null) {
                        setConfValue('panelPassword', $_POST['panel_password_first']); 
                }
                setConfValue('isInit', true);
                $protocol = _GET_PROTOCOL_S();
                $url = $_SERVER['HTTP_HOST'];
                header("Location:$protocol$url"); 
            } else {
                header("Location:$target?step=3&db=true&err=diffpw");
            }
        ?>
    </div>
</div>