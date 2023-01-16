<?php
 $array4 = array(
    1 => 'A', 
    2 => 'B',
    3 => 'C', 
    4 => 'D',
    5 => 'E',
    6 => 'F', 
    7 => 'G',
    8 => 'H', 
    9 => 'I',
    10 => 'J',
    11 => 'K', 
    12 => 'L',
    13 => 'M', 
    14 => 'N',
    15 => 'O',
    16 => 'P', 
    17 => 'Q',
    18 => 'R', 
    19 => 'S',
    20 => 'T',
    21 => 'U', 
    22 => 'V',
    23 => 'W', 
    24 => 'X',
    25 => 'Y',
    26 => 'Z',
 );
 $arrayCode = [];

 function LetterId($letter,$array) {
    $search = array_search($letter, $array);

    return $search;
}

function AdditionEncrypt($letterA, $letterB){
    $result = $letterA + $letterB;
    $result = $result % 26;

    return $result;
}

function SubtractionEncrypt($letterA, $letterB){
    $result = $letterA - $letterB;
    $isneg = CheckNegative($result);
    if ($isneg == 0){
        $result = $result + 26;
        return $result;
    }
    else
    {
        return $result;
    }
}

function CheckNegative($number){
    $check = 0;

    if ($number < 0){
        $check = 0;
    }
    if ($number >= 0){
        $check = 1;
    }
    return $check;
}

function EncryptionMasqueJetable($array){
    $phrase = (string)readline('Entrer la phrase a encoder: ');
    $number = 0;
    $code = "";
    $letter = "";
    $add = 0;
    $phraseId = 0;
    $codeId = 0;
    $n = 0;
    $n2 = 0;
    $n3 = 0;


    foreach (str_split($phrase) as $char1) {
        $n += 1;
    }
    for($i = 0; $i < $n; $i++){
        $number = random_int(1, 26);
        $code = $code . $array[$number];
    }

    echo "La clef est : " . $code;


    foreach (str_split($code) as $char2) {
        $arrayCode[$n2] = $char2;
        $n2 = $n2 + 1;
    }
    foreach (str_split($phrase) as $char1) {
        $phraseId = LetterId($char1,$array);
        $codeId = LetterId($arrayCode[$n3],$array);
        $add = AdditionEncrypt($phraseId, $codeId);
        
        $letter = $letter . $array[$add];

        $n3 = $n3 + 1;
    }
    echo "\n";
    return $letter;
}

function DecryptionMasqueJetable($array){
    $phrase = (string)readline('Entrer la phrase a decoder: ');
    $code = (string)readline('Entrer le code: ');
    $letter = "";
    $sub = 0;
    $phraseId = 0;
    $codeId = 0;
    $n2 = 0;
    $n3 = 0;

    foreach (str_split($code) as $char2) {
        $arrayCode[$n2] = $char2;
        $n2 = $n2 + 1;
    }
    foreach (str_split($phrase) as $char1) {
        $phraseId = LetterId($char1,$array);
        $codeId = LetterId($arrayCode[$n3],$array);
        $sub = SubtractionEncrypt($phraseId, $codeId);
        
        $letter = $letter . $array[$sub];

        $n3 = $n3 + 1;
    }
    echo "\n";
    return $letter;
}

echo "\n";
echo EncryptionMasqueJetable($array4);
echo "\n";
echo DecryptionMasqueJetable($array4);
echo "\n";

?>