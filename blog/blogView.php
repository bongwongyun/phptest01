<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
    // include "../connect/sessionCheck.php";
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
            <section id="blog-type" class="center">
                <?php
                    $BlogID = $_GET['BlogID'];

                    $sql = "SELECT b.BlogID, b.BlogTitle, b.BlogCategory, b.BlogContents, b.BlogAuthor, b.BlogImgfile, b.BlogRegtime FROM myBlog b JOIN myMember m ON (m.memberID = b.memberID) WHERE BlogID = {$BlogID}";
                    $result = $connect -> query($sql);

                    $sql = "UPDATE myBlog SET BlogView";
                            $connect -> query($sql);

                            if ($result) {
                               $BlogInfo = $result -> fetch_array(MYSQLI_ASSOC);
                            }
                ?>
                
                <div class="blog__label" style="background-image:url(../assets/img/blog/<?=$BlogInfo['BlogImgfile']?>)">
                <h3 class="section__title"><?=$BlogInfo['BlogTitle']?></h3>
                    <div>
                        <span class="author"><a href="#"><?=$BlogInfo['BlogAuthor']?></a></span>
                        <span class="date"><?=date('y-m-d h:i',$BlogInfo['BlogRegtime'])?></span><br>
                        <span class="modify"><a href="#">수정</a></span>
                        <span class="delete"><a href="#">삭제</a></span>
                    </div>
                </div>
                <div class="container">
                    <div class="blog__layout">
                        <div class="blog__left">
                            <h4><?=$BlogInfo['BlogTitle']?></h4>
                            <div>
                            <?=$BlogInfo['BlogContents']?>
                            </div>
                        </div>
                        <div class="blog__right">
                            <div class="ad">
                            <iframe src="https://ads-partners.coupang.com/widgets.html?id=572099&template=carousel&trackingCode=AF4942662&subId=&width=300&height=1000" width="300" height="1000" frameborder="0" scrolling="no" referrerpolicy="unsafe-url"></iframe>
                            </div>
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