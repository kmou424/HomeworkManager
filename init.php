<?php
include 'lib/config.php';
include 'lib/database.php';
include 'lib/jstools.php';
include 'lib/safe_request.php';

function getSubTitle() {
    switch ($_GET['step']) {
        case 1:
            return "数据库";
            break;
        case 2:
            return "连接中";
            break;
        case 3:
            return "创建面板管理员";
            break;
        case 4:
            return "完成";
            break;
        default:
            header("Location:index.php");
            break;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	    <title>初始化 - <?php echo getSubTitle() ?></title>
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css">
        <link rel="stylesheet" href="<?php echo $_SERVER['HTTP_HOST'] ?>/css/style.css">
	    <script src="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"></script>
    </head>
    <body>
        <div class="mdui-container">
            <div class="mdui-container-fluid">
                <div class="mdui-toolbar nexmoe-item">
                    <span class="mdui-typo-title">初始化 - <?php echo getSubTitle() ?></span>
                    <div class="mdui-toolbar-spacer"></div>
                </div>
            </div>
            <?php
            switch (_GET_S('step')) {
                case 1:
                    if (_GET_S("err") == "incom") showMessage('信息填入不完整，请重新填写');
                    include 'view/steps/step_one.php';
                    break;
                case 2:
                    include 'view/steps/step_two.php';
                    break;
                case 3:
                    include 'view/steps/step_three.php';
                    break;
                case 4:
                    include 'view/steps/step_four.php';
                    break;
            }
            ?>
        </div>

    </body>
</html>