<div class="mdui-container-fluid">
    <div class="nexmoe-item">
        <form action="<?php echo $target;?>?step=2" method="post">
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons">link</i>
                <label class="mdui-textfield-label">数据库服务器</label>
                <input class="mdui-textfield-input" placeholder="eg.localhost" name="database_host"/>
                <div class="mdui-textfield-helper">您的数据库所在的服务器地址(本地为localhost)</div>
            </div>
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons">storage</i>
                <label class="mdui-textfield-label">数据库名</label>
                <input class="mdui-textfield-input" placeholder="eg.DataBase" name="database_name"/>
                <div class="mdui-textfield-helper">您创建数据库时使用的名称</div>
            </div>
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons">account_circle</i>
                <label class="mdui-textfield-label">用户名</label>
                <input class="mdui-textfield-input" placeholder="eg.admin" name="database_username"/>
                <div class="mdui-textfield-helper">您创建数据库时使用的用户名</div>
            </div>
             <div class="mdui-textfield">
                <i class="mdui-icon material-icons">lock</i>
                <label class="mdui-textfield-label">密码</label>
                <input class="mdui-textfield-input" placeholder="eg.admin" name="database_password" type="password"/>
                <div class="mdui-textfield-helper">您创建数据库时使用的密码</div>
            </div><br>
            <div class="mdui-col">
                <button type="submit" class="mdui-btn mdui-btn-block mdui-color-pink-accent mdui-ripple">开始连接数据库</button>
            </div>
        </form>
    </div>
</div>