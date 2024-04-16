<?php

  if (isset($_GET['pwd-length'])) {
    session_start();
    $_SESSION['pwd_length'] = $_GET['pwd-length'];
    $_SESSION['letters'] = $_GET['letters'];
    $_SESSION['numbers'] = $_GET['numbers'];
    $_SESSION['symbols'] = $_GET['symbols'];
    header('Location: ./success.php');
  }
  
  function generatePassword ($n, $letters, $numbers, $symbols) {
    $data_string = '';
    $pwd = '';

    $data = [
      'letters_lowercase' => [
        'item' => 'abcdefghijklmnopqrstuvwxyz',
        'selected' => $letters
      ],
      'letters_uppercase' => [
        'item' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'selected' => $letters
      ],
      'numbers' => [
        'item' => '0123456789',
        'selected' => $numbers
      ],
      'symbols' => [
        'item' => '!?&%$^+-*/()[]{}@#_=',
        'selected' => $symbols
      ]
    ];

    foreach($data as $type) {
      if ($type['selected'] === 'true') {
        $data_string .= $type['item'];
      } else {
        $data_string .= '';
      }
    };

    for ($i = 1; $i <= $n ; $i++) {
      $str = rand(0, (strlen($data_string) - 1));
      $pwd .= $data_string[$str];
    };
    
    return $pwd;
  }

?>