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
<body class="bg-secondary">

  <div class="main-wrapper">

    <div class="container">

      <div class="row">

        <div class="col-6 offset-3">

          <form action="index.php" method="GET" class="my-5">
            
            <label for="pwd-length">Numero caratteri password</label>
            <input type="number" class="form-control mb-3" id="pwd-length" name="pwd-length" min="8" required>
            
            <div class="form-check">
              <input class="form-check-input" type="radio" value="false" name="norepeat" id="repeat" checked>
              <label class="form-check-label" for="repeat">
                Consenti ripetizione caratteri
              </label>
            </div>

            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" value="true" name="norepeat" id="norepeat">
              <label class="form-check-label" for="norepeat">
                Non consentire ripetizione caratteri
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="true" id="letters" name="letters" checked>
              <label class="form-check-label" for="letters">
                Lettere
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="true" id="numbers" name="numbers" checked>
              <label class="form-check-label" for="numbers">
                Numeri
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="true" id="symbols" name="symbols" checked>
              <label class="form-check-label" for="symbols">
                Simboli
              </label>
            </div>

            <button type="submit" class="btn btn-warning mt-4">Invia</button>


          </form>

        </div>

      </div>

    </div>

  </div>
  
</body>
</html>