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

    $memberID = $_SESSION['memberID'];
    $youEmail = $_POST['youEmail'];
    $youName = $_POST['youName'];
    $youBirth = $_POST['youBirth'];
    $youPhone = $_POST['youPhone'];
    $youPass = $_POST['youPass'];
    $youPhoto = $_POST['youPhoto'];
    $ImgFile = $_FILES['youPhoto'];
    $ImgSize = $_FILES['youPhoto']['size'];
    $ImgType = $_FILES['youPhoto']['type'];
    $ImgName = $_FILES['youPhoto']['name'];
    $ImgTmp = $_FILES['youPhoto']['tmp_name'];

    // 이미지 파일명
    $fileTypeExtension = explode("/",$ImgType);
    $fileType = $fileTypeExtension[0]; //image
    $fileExtension = $fileTypeExtension[1]; //jpeg
     
   
    //이미지 확인 작업 / 이미지 확장자 확인 작업 / 용량 확인(숙제)
    if($fileType == "image"){
        //확장자 확인
        if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
            //용량확인 
            if($ImgSize<100000000000){
                $ImgDir = "../assets/img/blog/";
                $ImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                $sql = "INSERT INTO myMember(memberID, youEmail, youName, youBirth, youPhone, youPass,youPhoto) VALUES('$memberID', '$youEmail', '$youName', '$youBirth', '$youPhone', '$youPass', '$youPhoto')";
                $sql ="UPDATE Member SET youPhoto = $ImgFile";
            }else{
                echo "<script>alert('용량이 큽니다.'); history.back(1);</script>"; 
            }
             
        } else { 
            echo "<script>alert('지원하는 이미지 파일 형식이 아닙니다. jpg, png, gif 사진 파일만 지원 합니다.'); history.back(1);</script>";
        }
    } else {
        $sql = "INSERT INTO myMember(memberID, youEmail, youName, youBirth, youPhone, youPass,youPhoto) VALUES('$memberID', '$youEmail', '$youName', '$youBirth', '$youPhone', '$youPass', '$ImgName')";
    }
    $result = $connect -> query($sql);
    $result = move_uploaded_file($ImgTmp, $ImgDir.$ImgName); 
     Header("Location: mypage.php");
     
?>
</body>
</html>