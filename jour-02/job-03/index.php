<?php
function log_in_db(){
    $bdd = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $bdd;
}
function insert_student(string $email, string $fullname, string $gender, DateTime $birthdate, int $gradeId): array {
    log_in_db();
    $query = log_in_db()->prepare('INSERT INTO students (grade_id, email, fullname, birthdate, gender) VALUES (:gradeId, :email, :fullname, :birthdate, :gender)');
    $query->execute(['gradeId'=> $gradeId, 'email' => $email, 'fullname' => $fullname, 'birthdate' => $birthdate, 'gender' => $gender]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}
if (isset($_POST['submitBtn'])) {
    if (!empty($_POST['input-email']) || !empty($_POST['input-fullname']) || !empty($_POST['input-gender']) || !empty($_POST['input-birthdate']) || !empty($_POST['input-grade_id'])) {
        $email = $_POST['input-email'];
        $fullname = $_POST['input-fullname'];
        $gender = $_POST['input-gender'];
        $birthdate = $_POST['input-birthdate'];
        $myDateTime = DateTime::createFromFormat('Y-m-d', $birthdate);
        $gradeId = $_POST['input-grade_id'];
        $gradeId = intval($gradeId);
        insert_student($email, $fullname, $gender, $myDateTime, $gradeId);
        echo 'Etudiant ajouté';
    } else {
        echo 'Veuillez remplir tous les champs';
    }
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <main>
        <form action="" method="post" class="flex flex-col w-1/4">
            <label for="email">Email</label>
            <input type="email" name="input-email" id="email" class="border">
            <label for="fullname">Fullname</label>
            <input type="text" name="input-fullname" id="fullname" class="border">
            <label for="gender">Gender</label>
            <select name="input-gender">
                <option>Male</option>
                <option>Female</option>
            </select>
            <label for="birthdate">Birthdate</label>
            <input type="date" name="input-birthdate" id="birthdate" class="border">
            <label for="gradeId">Grade ID</label>
            <input type="number" name="input-grade_id" id="gradeId" class="border">
            <input type="submit" value="Envoyer" class="" name="submitBtn">
        </form>
    </main>
</body>
</html>
