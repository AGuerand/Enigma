<?php
  //letter arrays
  $array1 = array(
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
        27 => 'a', 
        28 => 'b',
        29 => 'c', 
        30 => 'd',
        31 => 'e',
        32 => 'f', 
        33 => 'g',
        34 => 'h', 
        35 => 'i',
        36 => 'j',
        37 => 'k', 
        38 => 'l',
        39 => 'm', 
        40 => 'n',
        41 => 'o',
        42 => 'p', 
        43 => 'q',
        44 => 'r', 
        45 => 's',
        46 => 't',
        47 => 'u', 
        48 => 'v',
        49 => 'w', 
        50 => 'x',
        51 => 'y',
        52 => 'z'
  );

  //function to get a letters Id
  function LetterId($letter,$array) {
      $search = array_search($letter, $array);
      return $search;
  }

  //function to check if a letter is in maj
  function IsMaj($letter,$array) {
      $result = LetterId($letter,$array);
      $check = 1;
      //if in maj then return 1
      if($result > 26)
      {
            $check = 0;
            return $check;
      }
      else
      {
            $check = 1;
            return $check;
      }
  }
  //function to encrypt a msg
  function ChiffrementCesar($array1) {
      $id = 0;
      $maj = false;
      $code = (string)readline('Entrer la phrase a encoder: ');
      $decalage = (int)readline('Entrer le decalage: ');
      $result = "";

      foreach (str_split($code) as $char) {
            $id = LetterId($char,$array1);
            $maj = IsMaj($char,$array1);
            $n = $id + $decalage;
            $n2 = ($id) + $decalage;
            $letter = "";
            //if in maj
            if($maj == 1)
            {
                  //to stay in the arrays ID
                  while ($n >= 26) 
                  {
                        $n -= 26;
                  }
                  $letter = $array1[$n];
                  //concat result in a string
                  $result = $result . $letter;

            }
            else
            {
                  while ($n2 >= 52) 
                  {
                        $n2 -= 26;
                  }
                  $letter = $array1[$n2];
                  //concat result in a string
                  $result = $result . $letter;
            }
      }
      return $result;
  }
 //function to decrypt a msg
  function DechiffrementCesar($array1) {
      $id = 0;
      $maj = false;
      $code = (string)readline('Entrer la phrase a encoder: ');
      $decalage = (int)readline('Entrer le decalage: ');
      $result = "";

      foreach (str_split($code) as $char) {
            $id = LetterId($char,$array1);
            $maj = IsMaj($char,$array1);
            $n = $id - $decalage;
            $n2 = ($id) - $decalage;
            $letter = "";

            if($maj == 1)
            {
                  //to stay in the arrays ID
                  while ($n <= 0) 
                  {
                        $n += 26;
                  }
                  $letter = $array1[$n];
                  //concat result in a string
                  $result = $result . $letter;

            }
            else
            {
                  //to stay in the arrays ID
                  while ($n2 < 27) 
                  {
                        $n2 += 26;
                  }
                  $letter = $array1[$n2];
                  //concat result in a string
                  $result = $result . $letter;
            }
      }
      return $result;
  }

echo "Le resultat encrypté de Cesar est : " . DechiffrementCesar($array1);
?>