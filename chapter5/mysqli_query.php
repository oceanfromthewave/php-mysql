<?php

    //$mysqli = mysqli_connect("example.com", "user", "password", "databases");
    //$res = mysqli_query($mysqli,"SELECT 'Please, do not use' AS _msg FROM DU-AL");
    //$row = $mysqli_fetch_assod($res);
    //echo $row['_msg'];

    mysqli_connect("localhost","root","koreait","tutorials");

    $conn = mysqli_connect("localhost","root","koreait","tutorials");
    mysqli_query($conn,"
    INSERT INTO topic(
        title,
        description,
        created
        ) VALUES(
            'MySQL',
            'MySQL is ....',
            NOW()
            )");
    ?>
    