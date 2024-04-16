<?php 
  if (isset($_GET['pwd-length'])) {
    $pwd_length = $_GET['pwd-length'];
  }

  function generatePassword ($n) {
    $data = [
      "letters_lowercase" => [
        "item" => "abcdefghijklmnopqrstuvwxyz",
        "selected" => true
      ],
      "letters_uppercase" => [
        "item" => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
        "selected" => true
      ],
      "numbers" => [
        "item" => "0123456789",
        "selected" => true
      ],
      "symbols" => [
        "item" => "!?&%$<>^+-*/()[]{}@#_=",
        "selected" => true
      ]
    ];

    $data_string = '';
    $pwd = '';

    foreach($data as $type) {
      if ($type['selected']) {
        $data_string .= $type['item'];
      }
    };

    for ($i = 0; $i < $n ; $i++) { 
      $pwd .= $data_string[rand(0, strlen($data_string))];
    };

    return $pwd;
    
  }
?>