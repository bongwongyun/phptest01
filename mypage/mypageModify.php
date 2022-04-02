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
                    <form action="mypageModifySave.php" name="join" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="ir_so">회원정보 입력폼</legend>
                        <div class="join-intro">
                                <div>
                                    <label for="youPhoto">파일</label>
                                    <input type="file" name="youPhoto" id="youPhoto" placeholder="사진을 넣어주세요! 사진은 jpg, gif, png 파일만 지원이 됩니다." ></input> 
                                </div> 
                            <div class="intro">정보 수정이 가능한 공간입니다.</div>
                            <div class="change">사진 바꾸기</div>
                        </div>
                        <div class="join-box">
                            <div class="modify">
                                <label for="youEmail">이메일</label>   
                                <input type="email" id="youEmail" name="youEmail" autocomplete="off">
                            </div>
                            <div class="modify">
                                <label for="youName">이름</label>   
                                <input type="text" id="youName" name="youName" maxlength="5" autocomplete="off">
                            </div>
                            <div class="modify">
                                <label for="youBirth">생년월일</label>   
                                <input type="text" id="youBirth" name="youBirth" maxlength="12" autocomplete="off">
                            </div>
                            <div class="modify">
                                <label for="youPhone">휴대폰 번호</label>   
                                <input type="text" id="youPhone" name="youPhone" maxlength="15" autocomplete="off">
                            </div>
                            <div>
                                <label for="youPass">비밀번호 입력</label>   
                                <input type="password" id="youPass" name="youPass" placeholder="로그인 비밀번호를 입력해주세요!" maxlength="15" autocomplete="off" required>
                            </div>
                        </div>
                        <button id="joinBtn" class="join-submit" type="submit">회원정보 수정</button>
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