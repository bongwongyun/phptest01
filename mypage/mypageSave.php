<?php
      include "../connect/connect.php";
      include "../connect/session.php";
      include "../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보</title>
</head>
<body>
    <!-- skip -->
    <?php
    include "../include/skip.php";
    ?>
    <!-- skip -->
    <?php
        $youEmail = $_POST['youEmail'];
        $youName = $_POST['youName'];
        $youBirth = $_POST['youBirth'];
        $youPhone = $_POST['youPhone'];
        $youPass = $_POST['youPass'];
        $memberID = $_SESSION['memberID'];
        $ImgFile = $_FILES['File'];
        $ImgSize = $_FILES['File']['size'];
        $ImgType = $_FILES['File']['type'];
        $ImgName = $_FILES['File']['name'];
        $ImgTmp = $_FILES['File']['tmp_name'];

        $sql = "SELECT youPass, memberID FROM myMember WHERE memberID = {$memberID}";
        $result = $connect -> query($sql);
  
          if ($result) { 
            $mypageInfo = $result -> fetch_array(MYSQLI_ASSOC);
            if ($mypageInfo['youPass'] == $youPass && $mypageInfo['memberID'] == $memberID){ 
                $sql = "UPDATE myMember SET youEmail = '{$youEmail}', youName = '{$youName}',youName = '{$youName}',youBirth = '{$youBirth}',youPhone = '{$youPhone}' WHERE memberID = '{$memberID}'";
                $connect -> query($sql);
            } else {
                echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한번 확인해주세요'); history.back(1)</script>";
            }
            Header("Location:../pages/main.php");
        }
      ?>
</body>
</html>