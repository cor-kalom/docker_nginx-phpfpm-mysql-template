<html>
    <head>
        <title>test PHP</title>
    </head>
    <body>
        <h1>test PHP</h1>

        <?php 
            $pdo = new PDO(
                "mysql:host={$_ENV['MYSQL_DATABASE_DOCKER_HOST_NAME']};dbname={$_ENV['MYSQL_DATABASE_NAME']};charset={$_ENV['MYSQL_DATABASE_CHARSET']};",
                "{$_ENV['MYSQL_ROOT_USER']}",
                "{$_ENV['MYSQL_ROOT_PASSWORD']}"
            );throw new Exception("a");
            $res = $pdo->query("SELECT CURDATE() as `curdate`;");
            $row = $res->fetch();
        ?>

        <h2><?= $row["curdate"] ?></h2>

        <?php phpinfo(); ?>
    </body>
</html>
