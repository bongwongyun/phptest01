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
    <title>PHP 사이트</title>
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
        <section id="blog-type" class="section center type">
            <div class="container">
                <h3 class="section__title">강의 블로그</h3>
                <p class="section__desc">강의와 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="blog__inner">
                    <div class="blog__cont">
                    <?php
                        $sql = "SELECT b.BlogID, b.BlogTitle, b.BlogCategory, b.BlogContents, b.BlogAuthor, b.BlogImgfile, b.BlogRegtime FROM myBlog b JOIN myMember m ON (m.memberID = b.memberID)";
                        $result = $connect -> query($sql);
                    ?>
                        <?php foreach($result as $blog){ ?>
                            <article class="blog">
                            <figure class="blog__header" aria-hidden="true">
                            <a href="../blog/blogView.php?BlogID=<?=$blog['BlogID']?>" style="background-image:url(../assets/img/blog/<?=$blog['BlogImgfile']?>)"></a>
                            </figure>
                            <div class="blog__body">
                                <span class="blog__cate"><?=$blog['BlogCategory']?></span>
                                <div class="blog__title"><?=$blog['BlogTitle']?></div>
                                <div class="blog__desc"><?=$blog['BlogContents']?></div>
                                <div class="blog__info">
                                    <span class="author"><a href="#"><?=$blog['BlogAuthor']?></a></span>
                                    <span class="date"><?=date('y-m-d',$blog['BlogRegtime'])?></span>
                                </div>
                            </div>
                        </article>
                        <?php    }  ?>
                            <div class="blog__btn">
                                <a href="#">더 보기</a>
                            </div>
                    </div>
                </div>
            </div>
        </section>
<!-- blog-type -->
        <section id="notice-type" class="section center gray">
            <div class="container">
            <h3 class="section__title">강의 블로그</h3>
            <p class="section__desc">강의와 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
            <div class="notice__inner">
                <article class="notice">
                    <h4>공지사항</h4>
                    <ul>
                        <?php
                            $sql = "SELECT * FROM myBoard ORDER BY boardID DESC LIMIT 5";
                            $result = $connect -> query($sql);

                            if($result){
                             $count = $result -> num_rows;
                             if ($count > 0) {
                                 for ($i=1; $i<=$count; $i++) { 
                                     $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                       echo "<li><a href='../board/boardView.php?boardID={$boardInfo['boardID']}'>".$boardInfo['boardTitle']."</a><span class='time'>".date('Y-m-d', $boardInfo['regTime'])."</span></li>";
                                 }
                             }
                          }
                        ?>
                    </ul>
                    <a href="../board/board.php" class="more">더 보기</a>
                </article>
                <article class="notice">
                    <h4>댓글</h4>
                    <ul>
                    <?php
                        $sql = "SELECT * FROM myComment ORDER BY commentID DESC LIMIT 5";
                        $result = $connect -> query($sql);

                        if($result) {
                            $count = $result -> num_rows;
                            if($count > 0) {
                                for($i=1; $i<=$count; $i++){
                                    $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                    echo "<li><a href='../comment/comment.php#comment-type'>".$commentInfo['youtext']."</a><span class='time'>".date('Y-m-d', $commentInfo['regTime'])."</span></li>";
                                }
                            }
                        }
                    ?>
                    </ul>
                    <a href="../comment/comment.php" class="more">더 보기</a>
                </article>
            </div>
        </div>
        </section>
<!-- notice-type -->
    </main> 
    <!-- //main -->
    <!-- footer -->
    <?php include "../include/footer.php"; ?>
    <!-- //footer -->
</body>
</html>