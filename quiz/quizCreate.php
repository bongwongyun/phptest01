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
    <title>퀴즈 생성</title>
    <!-- style -->
    <?php
    include "../include/style.php";
    ?>
    <!-- style -->
</head>
<body>
        <!-- header -->
    <?php
    include "../include/header.php";
    ?>
    <!-- header -->
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="quiz-type" class="section center gray">
            <div class="container">
            <h3 class="section__title">퀴즈 생성기</h3>
                    <p class="section__desc">Stay here, I'll be back</p>
                    <div class="quiz__inner">
                        <div class="quiz__create">
                            <form action="quizCreateSave.php" name="quizCreate" method="post">
                                <fieldset>
                                    <legend class="ir_so">문제 만들기 영역</legend>
                                    <div>
                                        <label for="quizSubject"></label>
                                        <select name="quizSubject" id="quizSubject">
                                            <option value="apple">애플</option>
                                            <option value="google">구글</option>
                                            <option value="microsoft">마이크로소프트</option>
                                            <option value="amazon">아마존</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="quizAsk">문제</label>
                                        <textarea name="quizAsk" id="quizAsk" placeholder="문제를 작성해주세요"></textarea>
                                    </div>
                                    <div>
                                        <label for="quizDesc">문제 보충 설명</label>
                                        <textarea name="quizDesc" id="quizDesc" placeholder="문제에 대한 부가적인 설명을 적어주세요"></textarea>
                                    </div>
                                    <div>
                                        <label for="quizChoice1">문제 보충 설명</label>
                                        <input type="text" id="quizChoice1" name="quizChoice1" placeholder="보기 1번을 작성해주세요" required>
                                        <label for="quizChoice2">문제 보충 설명</label>
                                        <input type="text" id="quizChoice2" name="quizChoice2" placeholder="보기 2번을 작성해주세요" required>
                                        <label for="quizChoice3">문제 보충 설명</label>
                                        <input type="text" id="quizChoice3" name="quizChoice3" placeholder="보기 3번을 작성해주세요" required>
                                        <label for="quizChoice4">문제 보충 설명</label>
                                        <input type="text" id="quizChoice4" name="quizChoice4" placeholder="보기 4번을 작성해주세요" required>
                                    </div>
                                    <div>
                                        <label for="quizAnswer"></label>
                                        <select name="quizAnswer" id="quizAnswer">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="quizComment">문제에 대한 해설</label>
                                        <textarea name="quizComment" id="quizComment" placeholder="문제에 대한 해설을 적어주세요"></textarea>
                                    </div>
                                    <div>
                                        <label for="quizSource">출처 표시(출처가 있으면 작성바랍니다.)</label>
                                        <textarea name="quizSource" id="quizSource" placeholder="퍼오셨다면 출처를 남겨주세요"></textarea>
                                    </div>
                                    <div>
                                        <button class="next right" type="submit">저장하기</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
            </div>
        </section>
    </main> 
    <!-- footer -->
    <?php include "../include/footer.php"; ?>
    <!-- //footer -->
</body>
</html>