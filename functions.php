<?php 

  if (isset($_GET['pwd-length'])) {
    $pwd_length = $_GET['pwd-length'];
  }

  function generatePassword ($n) {
    $data_string = '';
    $pwd = '';
    var_dump($data_string);

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

    foreach($data as $type) {
      if ($type['selected']) {
        $data_string .= $type['item'];
      }
    };

    for ($i = 0; $i < intval($n) ; $i++) {
      $str = rand(0, strlen($data_string));
      $pwd .= trim($data_string[$str]);
      var_dump(strlen($pwd));
    };

    return $pwd;
  }
?>