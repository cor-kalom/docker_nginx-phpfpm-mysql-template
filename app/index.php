<html>
    <head>
        <title>test PHP</title>
    </head>
    <body>
        <h1>test PHP</h1>

        <?php 
            $pdo = new PDO("mysql:host=mysql;dbname=appdb;charset=utf8", "root", "root");
            $res = $pdo->query("SELECT CURDATE() as `curdate`;");
            $row = $res->fetch();
        ?>

        <h2><?= $row["curdate"] ?></h2>

        <?php phpinfo(); ?>
    </body>
</html>