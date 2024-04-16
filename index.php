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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
  <title>PHP Strong Password Generator</title>
</head>
<body>

  <div class="main-wrapper">

    <div class="container">

      <div class="row">

        <div class="col-6 offset-3">

          <form action="index.php" method="GET" class="my-5">

            <?php if (isset($_GET['pwd-length'])): ?>
              <h1>Password: <?php echo generatePassword($pwd_length) ?></h1>

            <?php else: ?>
            <label for="pwd-length">Numero caratteri password</label>
            <input type="number" class="form-control mb-3" id="pwd-length" min="8" name="pwd-length">

            <button type="submit" class="btn btn-warning">Invia</button>
            <?php endif ?>

          </form>

        </div>

      </div>

    </div>

  </div>
  
</body>
</html>