<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
        <li><a href="index.php?id=PHP">PHP</a></li>
        <li><a href="index.php?id=MYSQL">MYSQL</a></li>
</ol>
<h2>
    <?php
    echo $_GET['id']?? 'HTML';
    ?>
    </h2>
   <?php
   echo file_get_contents("data/".$_GET['id']);
    ?>
</body>
</html>

