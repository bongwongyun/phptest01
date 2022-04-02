<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myBlog (";
    $sql .= "BlogID int(10) unsigned auto_increment,";
    $sql .= "memberID int(20) unsigned NOT NULL,";
    $sql .= "BlogTitle varchar(255) NOT NULL,";
    $sql .= "BlogContents longtext NOT NULL,";
    $sql .= "BlogCategory varchar(20) NOT NULL,";
    $sql .= "BlogAuthor varchar(20) NOT NULL,";
    $sql .= "BlogView int(10) NOT NULL,";
    $sql .= "BlogLike int(10) NOT NULL,";
    $sql .= "BlogImgfile varchar(100) DEFAULT NULL,";
    $sql .= "BlogImgsize varchar(100) DEFAULT NULL,";
    $sql .= "BlogDelete int(10) NOT NULL,";
    $sql .= "BlogRegtime int(20) NOT NULL,";
    $sql .= "BlogModtime int(20) DEFAULT NULL,";
    $sql .= "PRIMARY KEY (BlogID)";
    $sql .= ") charset=utf8;";

    $result = $connect -> query($sql);
    if($result){
        echo "create table true";
    } else {
        echo "create table false";
    }
?>
