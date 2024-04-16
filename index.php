<?php 
  require __DIR__ . '/functions.php';
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
              <h1 class="text-center">Password:</h1>
              <p><?php echo generatePassword($pwd_length)?></p>

            <?php else: ?>
            <label for="pwd-length">Numero caratteri password</label>
            <input type="number" class="form-control mb-3" id="pwd-length" name="pwd-length">

            <button type="submit" class="btn btn-warning">Invia</button>
            <?php endif ?>

          </form>

        </div>

      </div>

    </div>

  </div>
  
</body>
</html>