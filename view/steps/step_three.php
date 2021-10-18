<?php
    if (!_GET_S("db")) header("Location:init.php?step=1");
    if (_GET_S("err") == "diffpw") showMessage('两次输入的密码不一致!');
?>

<div class="mdui-container-fluid">
    <div class="nexmoe-item">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>?step=4" method="post">
            <div class="mdui-textfield">
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons">account_circle</i>
                <label class="mdui-textfield-label">管理面板用户名</label>
                <input class="mdui-textfield-input" placeholder="用户名" name="panel_username"/>
                <div class="mdui-textfield-helper">留空保持默认(admin)</div>
            </div>
            <br>
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons">lock</i>
                <label class="mdui-textfield-label">管理面板密码</label>
                <input class="mdui-textfield-input" placeholder="密码" name="panel_password_first"  type="password"/>
            </div>
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons"></i>
                <label class="mdui-textfield-label">再次输入密码</label>
                <input class="mdui-textfield-input" placeholder="请确认您的密码" name="panel_password_second"  type="password"/>
                <div class="mdui-textfield-helper">留空保持默认(admin)</div>
            </div><br>
            <div class="mdui-col">
                <button type="submit" class="mdui-btn mdui-btn-block mdui-color-pink-accent mdui-ripple">下一步</button>
            </div>
        </form>
    </div>
</div>