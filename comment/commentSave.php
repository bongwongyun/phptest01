<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $youName = $_POST['youName'];
    $youText = $_POST['youtext'];
    $regTime = time();

    //echo  $youName, $youText, $regTime;

    //sql 작성이름, 텍스트, 시간 -->시간 query()

    $sql = "INSERT INTO myComment(youName,youtext,regTime) VALUES('$youName','$youText','$regTime')";
    $result = $connect -> query($sql);

    if ($result) {
       echo "INSERT INTO true";
    } else {
        echo "INSERT INTO false";
    }

    Header("location:../comment/comment.php#comment-type");
?>
</body>
</html>