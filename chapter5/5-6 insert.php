<?php
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