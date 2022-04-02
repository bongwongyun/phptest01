<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myComment (";
    $sql .= "CommentID int(10) unsigned auto_increment,";
    $sql .= "youName varchar(20) NOT NULL,";
    $sql .= "youtext varchar(100) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (CommentID)";
    $sql .= ") charset=utf8;";

    $result = $connect -> query($sql);
    if($result){
        echo "create table true";
    } else {
        echo "create table false";
    }
?>
