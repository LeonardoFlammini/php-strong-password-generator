<?php
$s = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';

$min=8;
$max=32;

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <link rel="stylesheet" href="css/style.css">
  <title>PHP Strong Password Generator</title>
</head>
<body>
  <div class="container-lf my-5">
    <div class="row row-cols-1 align-items-center " >
      <h1 class="text-center ">Password Generator</h1>
      <div class="alert alert-success my-3" role="alert">
        Scegli una password da 8 a 32 caratteri
      </div>
      <div class="box-lf rounded-1 ">
        <form action="index.php" method="POST">
        <div class="row row-cols-2 my-3">
          <label for="pswdlen">Scegliere una lunghezza:</label>
          <input type="number" id="pswdlen" min="8" max="32" require>
        </div>
        <div class="row my-3">
          <div class="col col-4">
            <button class="btn btn-primary" type="submit" style="width: 100% ">Invia</button>
          </div>
          <div class="col col-3">
            <button class="btn btn-secondary" type="reset" style="width: 100% ">Reset</button>
          </div>
          
          
        </div>
        </form>
        
      </div>
    </div >
  </div>
  
</body>
</html>