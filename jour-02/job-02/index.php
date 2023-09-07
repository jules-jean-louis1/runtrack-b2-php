<?php
function log_in_db(){
    $bdd = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $bdd;
}
function find_one_student(string $email): array {
    log_in_db();
    $query = log_in_db()->prepare('SELECT * FROM student WHERE email = :email');
    $query->execute(['email' => $email]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="" method="get">
            <label for="email">Email</label>
            <input type="email" name="input-mail-student" id="email">
            <input type="submit" value="Envoyer">
        </form>
    </main>
    <?php if (isset($_GET['input-mail-student'])):?>
        <?php $student = find_one_student($_GET['input-mail-student']);?>
        <?php foreach ($student as $value) :?>
            <p><?= $value ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
