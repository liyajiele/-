<?php
    include "../public/session.php";

    unset($_SESSION["is_login"]);
    unset($_SESSION["usename"]);

    $message="退出登录成功";
    $url="main.php";
    include "message.html";


?>