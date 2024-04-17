<?php 

  require __DIR__ . '/functions.php';

  session_start();
  
  if (!isset($_SESSION['pwd_length']) || ($_SESSION['letters'] === null && $_SESSION['numbers'] === null && $_SESSION['symbols'] === null)){
    header('Location: ./index.php');
  } else {
    $pwd_length = $_SESSION['pwd_length'];
    $letters = $_SESSION['letters'];
    $numbers = $_SESSION['numbers'];
    $symbols = $_SESSION['symbols'];
    $norepeat = $_SESSION['norepeat'];
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
<body class="bg-secondary">

  <div class="main-wrapper">

    <div class="container">

      <div class="row">

        <div class="col-6 offset-3 text-center">

          <h1 class="mt-5 mb-3">Password:</h1>
          <h5 class="mb-3"><?php echo generatePassword($pwd_length, $letters, $numbers, $symbols, $norepeat)?></h5>
          <button class="btn btn-warning"><a class="text-decoration-none text-black" href="index.php">Vai alla Home</a></button>

        </div>

      </div>

    </div>

  </div>
  
</body>
</html>