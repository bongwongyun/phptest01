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
    <!-- style -->
    <?php
    include "../include/style.php";
    ?>
    <!-- style -->
</head>
<body>
    <!-- skip -->
    <?php
    include "../include/skip.php";
    ?>
    <!-- skip -->
    <!-- header -->
    <?php
    include "../include/header.php";
    ?>
    <!-- header -->
    <main id="contents">
            <h2 class="ir_so">컨텐츠 영역</h2>
            <section class="join-type gray">
                <h2 class="Quizkids">Alpha<span class="kids">Omega</span></h2>
                <div class="member-form">
                    <h3>회원정보</h3>
                    <form action="mypageSave.php" name="join" method="post">
                        <fieldset>
                            <legend class="ir_so">회원정보 입력폼</legend>
                            <div class="join-intro">
                                <div class="face">
                                <img src="../assets/img/blog/<?=$memberInfo['youPhoto']?>" alt="img">
                                <?php
                                $memberID = $_SESSION['memberID'];

                                $sql = "SELECT youEmail, youNickName, youName, youBirth, youPhone, youGender, youSite, youIntro, youPhoto FROM Member WHERE memberID = {$memberID}";
                                $result = $connect -> query($sql);

                                if($result){
                                    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);  
                                    echo "<div class='intro'>".$memberInfo['youIntro']."</div>";
                                }
                                ?>
                                </div>
                                <div class="intro">프로필 사진</div>
                            </div>
                                <div class="join-info">
                                    <ul>
                                    <?php
                                        $memberID = $_SESSION['memberID'];
                                        $youEmail = $_POST['youEmail'];
                                        $youNickName = $_POST['youNickName'];
                                        $youName = $_POST['youName'];
                                        $youBirth = $_POST['youBirth'];
                                        $youPhone = $_POST['youPhone'];
                                        $youGender = $_POST['youGender'];
                                        $youSite = $_POST['youSite'];
                                        $youIntro = $_POST['youIntro'];
                                        $sql = "SELECT youEmail, youNickName, youName, youBirth, youPhone, youGender, youSite, youIntro FROM myMember WHERE memberID = {$memberID}";
                                        $result = $connect -> query($sql);
                                        if($result){
                                        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<li><strong>이메일</strong><span>".$memberInfo['youEmail']."</span></li>";
                                            echo "<li><strong>닉네임</strong><span>".$memberInfo['youNickName']."</span></li>";
                                            echo "<li><strong>이름</strong><span>".$memberInfo['youName']."</span></li>";
                                            echo "<li><strong>생일</strong><span>".$memberInfo['youBirth']."</span></li>";
                                            echo "<li><strong>번호</strong><span>".$memberInfo['youPhone']."</span></li>";
                                            echo "<li><strong>성별</strong><span>".$memberInfo['youGender']."</span></li>";
                                            echo "<li><strong>사이트</strong><span>".$memberInfo['youSite']."</span></li>";
                                        }
                                        //이메일
                                        //닉네임
                                        //이름
                                        //생일
                                        //번호
                                        //성별
                                        //사이트
                                    ?>
                        <!-- <li>
                            <strong>이메일</strong>
                            <span>abc@naver.com</span>
                        </li> -->
                    </ul>
                </div>
                             <div class="join-btn">
                    <a href="mypageModify.php">수정하기</a>
                    <a href="mypageRemove.php">탈퇴하기</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </section>
        </main>
    <!-- footer -->
    <?php
    include "../include/footer.php";
    ?>
    <!-- footer -->
</body>
</body>
</html>