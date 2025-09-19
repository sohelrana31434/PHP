<?php




$strings = ["Bangladesh", "Laravel", "PHP", "Assignment"];

function countConsonants($str) {
    preg_match_all(" /[bcdfghjklmnpqrstvwxyz]/i " , $str, $matches);
    return count($matches[0]);
}

foreach ($strings as $string) {
    $consonantCount = countConsonants($string);
    $uppercase = strtoupper($string);

    echo "Original String: $string, ";
    echo "Consonant Count: $consonantCount, ";
    echo "Uppercase String: $uppercase <br>";
    
}
?>
