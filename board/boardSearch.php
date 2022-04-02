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
    <title>게시판 검색</title>
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
            <section id="board-type" class="section center mb100">
            <div class="container">
                    <h3 class="section__title">검색 결과</h3>
                    <p class="section__desc">검색 결과입니다.</p>
                    <div class="board__inner">
                        <div class="board__search">
                        <?php
                            function msg ($alert) {
                                echo "<p class = 'result'>총 ".$alert." 건이 발견되었습니다.</p>";
                            }

                            $searchKeyword = $_GET['searchKeyword'];
                            $searchoption = $_GET['searchoption'];

                            $searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
                            $searchoption = $connect -> real_escape_string(trim($searchoption));

                            
                            //b.boardID, b.boardTitle,b. boardContents, m.youName, b.regTime, b.boardView
                            //$sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON (b.memberID = m. memberID) WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT 10";
                            //$sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON (b.memberID = m. memberID) WHERE b.boardContents LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT 10";
                            //$sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON (b.memberID = m. memberID) WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT 10";
                        
                            $sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON (b.memberID = m. memberID)";

                            switch ($searchoption) {
                                case 'title':
                                    $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
                                    break;
                                
                                case 'contents':
                                    $sql .= "WHERE b.boardContents LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
                                    break;
                                case 'name':
                                    $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
                                    break;
                            }
                            $result = $connect -> query($sql);

                            if ($result) {
                                $count = $result -> num_rows;
                                msg($count);
                            }
                        ?>
                        <div class="board__table">
                            <table class="hover">
                                <colgroup>
                                    <col style="width:5%">
                                    <col>
                                    <col style="width:10%">
                                    <col style="width:12%">
                                    <col style="width:7%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>번호</th>
                                        <th>제목</th>
                                        <th>등록자</th>
                                        <th>등록일</th>
                                        <th>조회수</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON (m.memberID = b.memberID) ORDER BY boardID";
                                        $result = $connect -> query($sql);

                                            if(isset($_GET["page"])){
                                                $page = $_GET["page"];
                                            } else {
                                                $_page = 1;
                                            }
                                               
                                            for ($i=1; $i<=$count; $i++) { 
                                                $searchKeyword = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo  "<tr>";
                                            echo  "<td>".$searchKeyword['boardID']."</td>";
                                            echo  "<td class='left'><a href='boardView.php?boardID={$searchKeyword['boardID']}'>".$searchKeyword['boardTitle']."</a></td>";
                                            echo  "<td>".$searchKeyword['youName']."</td>";
                                            echo  "<td>".date('Y-m-d', $searchKeyword['regTime'])."</td>";
                                            echo  "<td>".$searchKeyword['boardView']."</td>";
                                            echo  "</tr>";
                                        }
                                    ?>  
                                </tbody>
                            </table>
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