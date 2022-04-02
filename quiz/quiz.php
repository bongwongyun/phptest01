<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
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
            <h3 class="section__title">퀴즈 코너</h3>
                    <p class="section__desc">.존 코너.</p>
                    <div class="quiz__inner">
                        <div class="quiz__header">
                                <div class="quiz__subject">
                                    <label for="quiz__subject">종목 선택</label>
                                    <select name="quiz__subject" id="quiz__subject">
                                        <option value="apple">apple</option>
                                        <option value="google">google</option>
                                        <option value="microsoft">microsoft</option>
                                        <option value="amazon">amazon</option>
                                    </select>
                                </div>
                        </div>
                        <div class="quiz__body">
                            <div class="title">
                                <span class="quiz__num"></span> .
                                <span class="quiz__ask"></span>
                                <div class="quiz__desc"></div>
                            </div>
                            <div class="contents">
                            <div class="quiz__selects">
                                <label for="select1">
                                    <input class="select" type="radio" id="select1" name="select" value="1">
                                    <span class="choice"></span>
                                </label>
                                <label for="select2">
                                    <input class="select" type="radio" id="select2" name="select" value="2">
                                    <span class="choice"></span>
                                </label>
                                <label for="select3">
                                    <input class="select" type="radio" id="select3" name="select" value="3">
                                    <span class="choice"></span>
                                </label>
                                <label for="select4">
                                    <input class="select" type="radio" id="select4" name="select" value="4">
                                    <span class="choice"></span>
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="quiz__footer">
                            <div class="quiz__btn">
                            <button class="comment none">설명 보기</button>
                            <button class="confirm ml10">정답 보기</button>
                            <button class="next right">다음 문제</button>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </main> 
    <!-- //main -->
    <!-- footer -->
    <?php include "../include/footer.php"; ?>
    <!-- //footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        //지역변수 (정답)
        let quizAnswer = "";

        function quizView(View){
            $(".quiz__num").text(View.quizID);
            $(".quiz__ask").text(View.quizAsk);
            $("#select1 + span").text(View.quizChoice1);
            $("#select2 + span").text(View.quizChoice2);
            $("#select3 + span").text(View.quizChoice3);
            $("#select4 + span").text(View.quizChoice4);
            quizAnswer = View.quizAnswer;
            console.log(quizAnswer);
        }

        //다음 문제
        function quizNext(){

        }
        //정답 체크
        function quizCheck(){
            let selectCheck = $(".quiz__selects input:checked").val();
            //정답 체크를 안했으면
            if(selectCheck == null || selectCheck == ''){
                alert("정답을 체크해주세요!")
            }

            //정답 체크를 했으면
            if(selectCheck == quizAnswer){
                //정답
                $(".quiz__selects #select" + quizAnswer).addClass("correct");
            } else {
                //오답
                $(".quiz__selects #select" + selectCheck).addClass("incorrect");
                $(".quiz__selects #select" + quizAnswer).addClass("correct");
            }
        }
        // function quizCheck(){
        //     let selectCheck = $(".quiz__selects input:checked").val();
        //     //정답을 체크 안했으면
        //     if(selectCheck == null || selectCheck == ''){
        //         alert("정답을 체크해주세요!!!")
        //     }

        //     //정답을 체크 했으면
            // if(selectCheck == quizAnswer){
            //     //정답
            //     $(".quiz__selects #select"+quizAnswer).addClass("correct");
            // } else {
        //         //오답
        //         $(".quiz__selects #select"+selectCheck).addClass("incorrect");
        //         $(".quiz__selects #select"+quizAnswer).addClass("correct");
    
        //     }
        // }
        //문제 가져오기
        function quizdata(){
            let quizSubject = $("#quiz__subject").val();

            $.ajax({
                url: "quizInfo.php",
                method: "POST",
                data: {"quizSubject":quizSubject},
                dataType:"json",
                success: function(data){
                    console.log(data.quiz);
                    quizView(data.quiz);
                },
                error:function(reqeust, status, error){
                    console.log('reqeust' + reqeust);
                    console.log('status' + status);
                    console.log('error' + error);
                } 
            })
        }
        quizdata();

        //과목 선택
        $("#quiz__subject").change(function(){
            quizdata();
        });
        //정답 확인
        $(".quiz__btn .confirm").click(function(){
            //정답을 클릭했는지 안했는지 판단
            quizCheck();
            $(".quiz__btn .comment").fadeIn();
            $(".quiz__btn .next").fadeIn();
        });
        //다음 문제 버튼
        $(".quiz__btn .next").click(function(){
            quizdata();
            $(".quiz__selects input").prop("checked",false);
            $(".quiz__selects input").removeClass("correct");
            $(".quiz__selects input").removeClass("incorrect");
            $(".quiz__selects .next").fadeOut();
        });
    </script>
</body>
</html>