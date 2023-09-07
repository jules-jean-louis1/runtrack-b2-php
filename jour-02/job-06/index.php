<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-01-24
 * Time: 10:36
floor
 * id
 * name
 * level
grade
 * id
 * room_id
 * name
 * year
room
 * id
 * floor_id
 * name
 * capacity
student
 * id
 * grade_id
 * email
 * fullname
 * birthdate
 * gender

À l’intérieur de ce fichier, faites une
fonction find_full_rooms(). Cette fonction devra retourner les noms et la capacité des
salles. Ajoutez une colonne pour indiquer si une salle est pleine avec les étudiants
présents dedans. La fonction devra retourner un tableau avec la structure suivante :
Dans la suite de votre fichier PHP, faites une structure HTML basique et générez un
tableau avec le retour de la fonction pour afficher toutes les lignes récupérées.
 *
 Je veux les resultats comme ça:
$rooms = [
['name' => '....', 'capacity' => '....', 'is_full' => '....'],
['name' => '....', 'capacity' => '....', 'is_full' => '....'],
['name' => '....', 'capacity' => '....', 'is_full' => '....'],
['name' => '....', 'capacity' => '....', 'is_full' => '....'],
['name' => '....', 'capacity' => '....', 'is_full' => '....']
];
 */

function log_in_db(){
    $bdd = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $bdd;
}
function find_full_rooms():array {
    log_in_db();
    $query = log_in_db()->prepare('SELECT room.name, room.capacity, COUNT(student.id) AS student_count
                                            FROM room
                                            LEFT JOIN student ON room.id = student.grade_id
                                            GROUP BY room.name, room.capacity');
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    $rooms = [];
    foreach ($result as $room) {
        $is_full = $room['student_count'] >= $room['capacity'] ? 'Oui' : 'Non';
        $rooms[] = [
            'name' => $room['name'],
            'capacity' => $room['capacity'],
            'is_full' => $is_full
        ];
    }
    return $rooms;
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
    <main class="flex justify-center">
        <table border="1" class="flex gap-2">
            <tr class="border-2">
                <th>Nom de la salle</th>
                <th>Capacité</th>
                <th>Salle pleine</th>
            </tr>
            <?php foreach (find_full_rooms() as $room) { ?>
                <tr>
                    <td><?php echo $room['name']; ?></td>
                    <td><?php echo $room['capacity']; ?></td>
                    <td><?php echo $room['is_full']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </main>
</body>
</html>
