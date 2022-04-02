<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글</title>
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
        <section id="card-type" class="section center">
                    <h2 class="card-main">UEFA Champions League</h2>
            <p class="card-text">유럽 축구 연맹(UEFA)이 주관하는 축구 대회로, 유럽 각국에서 우수한 성적을 거둔 클럽들이 모여 유럽 최강의 축구 클럽을 결정하는 대회이다.
            </p>
            <div class="card-inner">
                <article class="img__box1">
                    <img src="../img/ucl.jpg" alt="cl">
                    <div class="img__ul">
                    <h3>UEFA 챔피언스 리그</h3>
                    <p>지구상에 현존하는 스포츠 대회 중 가장 많은 상금을 주는데 우승 상금이 2021-22 시즌 기준으로 무려 2,000만 유로이며, 우승 상금과 별도로 본선 4강까지 매 라운드에 진출할 때마다 두둑한 수당을 지급한다.</p>
                    <a href="#">자세히 보기
                        <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                        </svg>
                    </a>
                    </div>
                </article>
                <article class="img__box2">
                    <img src="../img/uel.jpg" alt="cl">
                    <div class="img__ul">
                    <h3>UEFA 유로파 리그</h3>
                    <p>유로파 리그의 시초는 1955년부터 시작된 인터-시티 페어스컵이다. 이 대회는 국제 견본시를 개최하는 도시의 클럽들 간의 클럽 대항전이었다. 팀의 순위에는 관계없이 '한 도시 한 팀'이라는 참가 조건뿐이었다.</p>
                    <a href="#">자세히 보기
                        <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                        </svg>
                    </a>
                    </div>
                </article>
                <article class="img__box3">
                    <img src="../img/uecl.jpg" alt="cl">
                    <div class="img__ul">
                    <h3>UEFA 유로파 컨퍼런스 리그</h3>
                    <p>컵 대회 우승과 리그 순위에 따라 본선 조별 리그에 직행하게 되는 UEFA 챔피언스 리그, UEFA 유로파 리그와 달리 UEFA 유로파 컨퍼런스 리그는 본선 조별 리그 직행 시드가 없다.</p>
                    <a href="#">자세히 보기
                        <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                        </svg>
                    </a>
                    </div>
                </article>
            </div>
        </section>

        <section id="comment-type" class="section center blue">
            <h3 class="section__title">관람 신청하기</h3>
            <p class="section__desc">관람 신청하기는 누구나 신청할 수 있습니다. (100글자 이내로 써주세요)</p>
            <div class="comment__inner">
                <div class="comment__form">
                    <form action="commentSave.php" method="post" name="comment">
                        <fieldset>
                            <legend class="ir_so">댓글쓰기</legend>
                            <div class="comment__wrap">
                                <div>
                                    <label for="youName" class="ir_so">이름</label>
                                    <input type="text" name="youName" id="youName" class="input__style" placeholder="이름" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="youtext" class="ir_so">댓글 쓰기</label>
                                    <input type="text" name="youtext" id="youtext" class="input__style width" placeholder="관람 신청 이유을 적어주세요!" autocomplete="off" required>
                                </div>
                                <button class="comment__btn" type="submit" value="글 작성하기">작성하기</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="comment__list">
                    <!-- <div class="list">
                        <p class="comment__desc">신청합니다.</p>
                        <div class="comment__icon">
                            <span class="face"><img src="../img/face.png" alt="face"></span>
                            <span class="name">작성자01</span>
                            <span class="date">2022-03-11</span>
                        </div>
                    </div> -->

                    <?php
                        include "../connect/connect.php";
                        $sql = "SELECT * FROM myComment";
                        
                        $result = $connect -> query($sql);
                        $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);
                        
                        // echo "<pre>";
                        // var_dump($commentInfo);
                        // echo "</pre>";
                    ?>

                    <?php while($commentInfo = $result -> fetch_array(MYSQLI_ASSOC)){ ?>
                            <div class="list">
                                <p class="comment__desc"><?=$commentInfo['youtext']?></p>
                                <div class="comment__icon">
                                    <span class="face"><img src="../img/face.png" alt="face"></span>
                                    <span class="name"><?=$commentInfo['youName']?></span>
                                    <span class="date"><?=date('Y-m-d',$commentInfo['regTime'])?></span>
                                </div>
                            </div>
                    <?php } ?>


                    <?php
                    // include "../connect/connect.php";

                    // $sql = "SELECT * FROM myComment";
                    // $result = $connect -> query($sql);

                    // // $commentInfo = mysqli_fetch_array($result);
                    // // echo "<pre>";
                    // // var_dump($commentInfo);
                    // // echo "</pre>";

                    // if($result){
                    //     $count = $result -> num_rows;
                    //     if($result > 0){
                    //         for($i=1; $i<=$count; $i++){
                    //             $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);
                    //             echo "<div class='list'>";
                    //             echo "<p class='comment__desc'>".$commentInfo['youtext']."</p>";
                    //             echo "<div class='icon'>";
                    //             echo "<div class='comment__icon'>";
                    //             echo "<span class='face'><img src='../img/face.png' alt='face'></span>";
                    //             echo "<span class='name'>".$commentInfo['youName']."</span>";
                    //             echo "<span class='date'>".date('Y-m-d', $commentInfo['regTime'])."</span>";
                    //             echo "</div>";
                    //             echo "</div>";
                    //             echo "</div>";
                    //         }
                    //     }
                    // }
                    ?>
                </div>
            </div>
            
        </section>
    </main>

    <!-- footer -->
    <?php
    include "../include/footer.php";
    ?>
    <!-- footer -->
</body>
</html>