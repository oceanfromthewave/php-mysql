<?php
    $mysqli = mysqli_connect("localhost", "root", "koreait", "tutorials");
    //var dump($mysqli);
    $res = mysqli_query($mysqli, "SHOW TABLES");
    //var dump($res);
    if(!$res) {
        echo mysqli_error($mysqli);
    }

    $row = mysqli_fetch_row($res);
    var_dump($row); 
?>