<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<?php
    $sql = "SELECT count(boardID) FROM myBoard";
    $result = $connect -> query($sql);

    $boardCount = $result -> fetch_array(MYSQLI_ASSOC);
    $boardCount = $boardCount['count(boardID)'];
                                    
    // echo "<pre>";
    // var_dump($boardCount);
    // echo "</pre>";

    //page number 갯수
    //300/10 = 30
    //301/10 = 31
    //306/10 = 31
    //309/10 = 31

    //총 페이지 갯수
    $boardCount = ceil($boardCount/$pageView);

    //현재 페이지를 기준으로 보여주는 갯수
    $pageCurrent = 5;
    $startpage = $page - $pageCurrent;
    $endpage = $page + $pageCurrent;

    //처음 페이지 초기화
    if($startpage < 1) $startpage = 1;

    //마지막 페이지 초기화
    if($endpage >= $boardCount) $endpage = $boardCount;

    //이전 페이지
    if($page !=1){
        $prevPage = $page - 1;
        echo "<li><a href='board.php?page={$prevPage}'>이전</a></li>";
    }

    //처음 페이지
    if($page !=1){
        $prevPage = $page - 1;
        echo "<li><a href='board.php?page=1'>처음으로</a></li>";
    }
                                    
    //페이지 넘버 표시
    for ($i=$startpage; $i<=$endpage; $i++) {
        $active = "";

        if ($i == $page) {
            $active = "active";
        }
            echo "<li class='{$active}'><a href='board.php?page={$i}'>{$i}</a></li>";
        }
    //다음 페이지
    if($page != $endpage){
        $prevPage = $page + 1;
        echo "<li><a href='board.php?page={$prevPage}'>다음</a></li>";
    }

    //마지막 페이지
    if($page != $endpage){
        echo "<li><a href='board.php?page={$boardCount}'>마지막</a></li>";
    }
?>
