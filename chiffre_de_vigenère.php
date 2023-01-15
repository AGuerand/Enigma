<?php
$array2 = [
    'A' => ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'],
    'B' => ['B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A'],
    'C' => ['C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B'], 
    'D' => ['D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C'],
    'E' => ['E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D'],
    'F' => ['F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E'], 
    'G' => ['G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F'],
    'H' => ['H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G'], 
    'I' => ['I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H'],
    'J' => ['J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I'],
    'K' => ['K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J'], 
    'L' => ['L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K'],
    'M' => ['M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L'], 
    'N' => ['N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M'],
    'O' => ['O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N'],
    'P' => ['P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O'], 
    'Q' => ['Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P'],
    'R' => ['R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q'], 
    'S' => ['S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R'],
    'T' => ['T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S'],
    'U' => ['U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T'], 
    'V' => ['V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U'],
    'W' => ['W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'], 
    'X' => ['X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W'],
    'Y' => ['Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X'],
    'Z' => ['Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y']
];
$arrayCode = [];

function GetLetterIdCode($letter,$code,$array) {
    // $Clef == nom de la ligne d'array
    foreach ($array as $clef => $ligne){
        if($clef == $code)
        {
            foreach($ligne as $id => $valeur){
                // $valeur == lettre
                if($valeur == $letter) 
                {
                    return $id;
                }
            }
        }
    }
}

function GetLetterFromIdPhrase($id2,$array) {
    // $Clef == nom de la ligne d'array
    foreach ($array as $clef => $ligne){
        if($clef == 'A')
        {
            foreach($ligne as $id => $valeur){
                // $valeur == lettre
                if($id == $id2) 
                {
                    return $valeur;
                }
            }
        }
    }
}

function GetLetterIdPhrase($letter,$array) {
    // $Clef == nom de la ligne d'array
    foreach ($array as $clef => $ligne){
        if($clef == 'A')
        {
            foreach($ligne as $id => $valeur){
                // $valeur == lettre
                if($valeur == $letter) 
                {
                    return $id;
                }
            }
        }
    }
}

function ChiffrementVigenere($array,$arrayCode) {
    $phrase = (string)readline('Entrer la phrase a encoder: ');
    $code = (string)readline('Entrer le code: ');
    $letter = "";
    $result = ""; 
    $idPhrase = 0;
    $n1 = 0;
    $n2 = 0;

    foreach (str_split($code) as $char2) {
        $arrayCode[$n2] = $char2;
        $n2 = $n2 + 1;
    }

    foreach (str_split($phrase) as $char1) {
        $idPhrase = GetLetterIdPhrase($char1,$array);
        if($char1 == " ")
        {
            $letter = $letter . " ";
        } 
        else
        {
            if($n1 >= $n2)
            {
                $n1 = 0;
                $letter = $letter . $array[$arrayCode[$n1]][$idPhrase];
                $n1 = $n1 + 1;
            }
            else
            {
                $letter = $letter . $array[$arrayCode[$n1]][$idPhrase];
                $n1 = $n1 + 1;
            }
        }
    }
    return $letter;
}

function DechiffrementVigenere($array,$arrayCode) {
    $phrase = (string)readline('Entrer la phrase a decoder: ');
    $code = (string)readline('Entrer le code: ');
    $letter = "";
    $id = 0;
    $idCode = 0;
    $idPhrase = 0;
    $n1 = 0;
    $n2 = 0;


    foreach (str_split($code) as $char2) {
        $arrayCode[$n2] = $char2;
        $n2 = $n2 + 1;
    }

    foreach (str_split($phrase) as $char1) {
        $idCode = GetLetterIdCode($char1,$arrayCode[$n1],$array);
        if($char1 == " ")
        {
            $letter = $letter . " ";
        } 
        else
        {
            if($n1 == $n2 -1)
            {
                $n1 = 0;
            }
            else
            {
                $n1 = $n1 + 1;
            }
            
            $letter = $letter . $array['A'][$idCode];
        }
    }
    return $letter;
}

echo ChiffrementVigenere($array2,$arrayCode);
echo "\n";
echo DechiffrementVigenere($array2,$arrayCode);
echo "\n";

?>