<?php 

  if (isset($_GET['pwd-length'])) {
    session_start();
    $_SESSION['$pwd_length'] = $_GET['pwd-length'];
    header('Location: ./success.php');
  }

  function generatePassword ($n) {
    $data_string = '';
    $pwd = '';

    $data = [
      'letters_lowercase' => [
        'item' => 'abcdefghijklmnopqrstuvwxyz',
        'selected' => true
      ],
      'letters_uppercase' => [
        'item' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'selected' => true
      ],
      'numbers' => [
        'item' => '0123456789',
        'selected' => true
      ],
      'symbols' => [
        'item' => '!?&%$^+-*/()[]{}@#_=',
        'selected' => true
      ]
    ];

    foreach($data as $type) {
      if ($type['selected']) {
        $data_string .= $type['item'];
      }
    };

    for ($i = 1; $i <= $n ; $i++) {
      $str = rand(0, (strlen($data_string) - 1));
      $pwd .= $data_string[$str];
    };
    
    return $pwd;
  }
?>