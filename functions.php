<?php

  if (isset($_GET['pwd-length'])) {
    session_start();
    $_SESSION['pwd_length'] = $_GET['pwd-length'];
    $_SESSION['letters'] = $_GET['letters'];
    $_SESSION['numbers'] = $_GET['numbers'];
    $_SESSION['symbols'] = $_GET['symbols'];
    $_SESSION['norepeat'] = $_GET['norepeat'];
    header('Location: ./success.php');
  }
  
  function generatePassword ($n, $letters, $numbers, $symbols, $norepeat) {
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
        'item' => '!?&%$<>^+-*/()[]{}@#_=',
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

    if ($norepeat === 'true') {
      $n = $n > strlen($data_string) ? strlen($data_string) : $n;
    }

    while(strlen($pwd) < $n){
      $str = rand(0, (strlen($data_string) - 1));

      if ($norepeat === 'true') {
        
        if (!str_contains($pwd, $data_string[$str])) {
          $pwd .= $data_string[$str];
        } else{
          $pwd .= '';
        }

      } else {
        $pwd .= $data_string[$str];
      }

    }

    $pwd = str_replace('<', '&lt', $pwd);
    $pwd = str_replace('>', '&gt', $pwd);

    return $pwd;
  }

?>