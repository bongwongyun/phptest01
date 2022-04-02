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
    <title>블로그</title>
    <?php
    include "../include/style.php";
    ?>
    <style>
        .footer {
            background: #f5f5f5;
        }
    </style>
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
            <section id="blog-type" class="section center mb100">
                <div class="container">
                <h3 class="section__title">블로그</h3>
                    <p class="section__desc">자 블로그입니다 마음껏 뒤져봐라.</p>
                    <div class="blog__inner">
                        <div class="blog__search">
                            <form action="blogSearch.php" method="get">
                                <fieldset>
                                    <legend class="ir_so">검색 영역</legend>
                                <input type="search" name="blogSearch" id="blogSearch" class="search" placeholder="검색어를 입력하십시요">
                                <label for="blogSearch" class="ir_so">검색</label>
                                <button class="button"></button>
                                </fieldset>
                            </form>
                        </div>
                        <div class="blog__btn">
                            <a href="blogWrite.php">글쓰기</a>
                        </div>
                        <div class="blog__cont">
                            <?php
                            $sql = "SELECT b.BlogID, b.BlogTitle, b.BlogCategory, b.BlogContents, b.BlogAuthor, b.BlogImgfile, b.BlogRegtime FROM myBlog b JOIN myMember m ON (m.memberID = b.memberID)";
                            $result = $connect -> query($sql);
                            ?>
                            <?php foreach($result as $blog){ ?>
                                <article class="blog">
                                <figure class="blog__header">
                                <a href="blogView.php?BlogID=<?=$blog['BlogID']?>" style="background-image:url(../assets/img/blog/<?=$blog['BlogImgfile']?>)"></a>
                                </figure>
                                <div class="blog__body">
                                    <span class="blog__cate"><?=$blog['BlogCategory']?></span>
                                    <div class="blog__title"><a href="blogView.php?BlogID=<?=$blog['BlogID']?>"><?=$blog['BlogTitle']?></a></div>
                                    <div class="blog__desc"><?=$blog['BlogContents']?></div>
                                    <div class="blog__info">
                                        <span class="author"><a href="#"><?=$blog['BlogAuthor']?></a></span>
                                        <span class="date"><?=date('y-m-d',$blog['BlogRegtime'])?></span>
                                        <span class="modify"><a href="#">수정</a></span>
                                        <span class="delete"><a href="#">삭제</a></span>
                                    </div>
                                </div>
                            </article>
                            <?php    }  ?>
                        </div>
                        <div class="blog__pages">
                        <ul>
                                <li><a href="#">&lt;&lt;</a></li>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><a href="../blog/blog.php">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">&gt;</a></li>
                                <li><a href="#">&gt;&gt;</a></li>
                            </ul>
                        </div>
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