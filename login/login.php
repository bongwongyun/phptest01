<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
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
                <div class="member-form02">
                    <h3 class="ir_so">로그인</h3>
                    <form action="loginSave.php" name="join" method="post">
                        <fieldset>
                            <legend class="ir_so">로그인 입력폼</legend>
                            <div class="join-box">
                                <div>
                                    <label for="youEmail" class="ir_so">아이디</label>
                                    <input type="email" id="youEmail" name="youEmail" placeholder="아이디를 입력해주세요." autocomplete="off" autofocus required>
                                </div>
                                <div>
                                    <label for="youPass" class="ir_so">비밀번호</label>
                                    <input type="password" id="youPass" name="youPass" maxlength="20" placeholder="비밀번호를 입력해주세요." autocomplete="off" required>
                                </div>
                                <div class="join-checkbox">
                                    <input type="checkbox" value='idSave'><span>로그인 저장</span> 
                                    <input type="checkbox" value='aotoLogin'><span>자동 로그인</span>
                                </div>
                            <button id="joinbtn" class="join-submit" type="submit">로그인</button>
                            <div class="login__option">
                            <a href="#">아이디 찾기</a>
                            <span>|</span>
                            <a href="#">비밀번호 찾기</a>
                            <span>|</span>
                            <a href="#">회원가입</a>
                                </div>
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