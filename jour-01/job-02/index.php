<?php
function my_str_reverse(string $string): string {
    $i = 0;
    $reverse = "";
    while (isset($string[$i])) {
        $i++;
    }
    $i--;
    while (isset($string[$i])) {
        $reverse .= $string[$i];
        $i--;
    }
    return $reverse;
}
echo my_str_reverse("La Plateforme"); /** retourne emroftaleP aL **/
?>