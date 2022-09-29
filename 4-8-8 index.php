<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <li><a href="4-8-8 index.php?id=HTML">HTML</a></li>
        <li><a href="4-8-8 index.php?id=CSS">CSS</a></li>
        <li><a href="4-8-8 index.php?id=JavaScript">JavaScript</a></li>
</ol>
<h2>
    <?php
    $id=$_GET['id']??'HTML';
    echo $id;
    ?>
    </h2>
    <?php
    echo file_get_contents("data/$id");?>


</body>
</html>

