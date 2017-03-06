<?php
include "../public/db.php";
include "../public/session.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        width:1000px;
        margin: auto;
        border: 1px solid #000000;
        border-collapse: collapse;
    }
    td,th{
        width: 25%;
        height: 30px;
        text-align: center;
        line-height: 30px;
        border: 1px solid #000000;
        border-top:0;
    }
</style>
<body>
<table>
    <tr>
        <th>pid</th>
        <th>pname</th>
        <th>操作</th>
    </tr>
    <?php
    $result=$db->query("select * from position");
    while($row=$result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row["pid"] ?></td>
            <td><?php echo $row["pname"] ?></td>
            <td><a href="delconp.php?id=<?php echo $row["pid"]?>">删除</a><a href="updateconpp.php?id=<?php echo $row["pid"] ?>">编辑</a></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
