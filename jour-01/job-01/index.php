<?php
/**Dans le dossier job-01, faites un fichier index.php. À l’intérieur de ce fichier index.php,
ajouter une fonction my_str_search(). Cette fonction permettra de compter le nombre
d’occurrences d’une lettre dans une chaîne de caractères.
Elle prendra en premier paramètre la lettre à chercher dans la chaine de caractère, et en
deuxième paramètre la chaine de caractères dans laquelle chercher. Cette fonction
retourne un entier, le nombre d’occurrences de la lettre.
 **/

function my_str_search(string $haystack, string $needle): int {
    $count = 0;
    $i = 0;
    while (isset($haystack[$i])) {
        if ($haystack[$i] === $needle) {
            $count++;
        }
        $i++;
    }
    return $count;
}
echo my_str_search("La Plateforme", "a"); /** retourne 2 **/
?>