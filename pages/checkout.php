<?php
session_start(); //session
var_dump($_POST); 
var_dump($_SESSION);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="COVID proof online restaurant">
    <meta name="author" content="Darnell">
    <title>Bestellen</title>

    <!-- CSS -->    
    <link href="../css/style.css" rel="stylesheet">    
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="bg-light">
    <?php include '../php/oti.php'?> 
    <!-- navigatie -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #ffa500;">
      <a class="navbar-brand" href="../index.php#frisdranken">OTI Michelin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../index.php#frisdranken">Gerechten</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../index.php#frisdranken">Frisdranken</a>
              </li>        
          </ul>
        </div>
        <span class="navbar-text">
        <a href="#" class="cart"><?=(isset($_SESSION['bestellingprijs']) ? count($_SESSION['bestellingprijs']) : '');?><img src="../img/iconmonstr-basket-4-240.png"></a>
        </span>
    </nav>
      <!-- header Winkelmandje -->
    <div class="container">
      <div class="py-5 text-center">  
        <br>    
        <br>    
        <br>    
        <br>    
        <h2>Winkelmandje</h2>
        <p class="lead">
        <?php       
        if (!isset($_POST["afrekenen"])){
          echo "Vul uw gegevens correct in. Eetsmakelijk!";// voor het afrekenen krijgt de gebruiker dit te zien
        }
        if (isset($_POST["afrekenen"])){
          echo "Uw bestelling is geplaats. In uw mail heeft u een bevestiging ontvangen"; // na het afrekenen krijgt de gebruiker dit te zien
        }
        ?>
        </p>
      </div>

      <div class="row">  <!-- row -->
        <div class="col-md-4 order-md-2 mb-4"> <!-- menu aan de rechter kant -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Winkelmandje</span> 
            <span class="badge badge-secondary badge-pill"><?php echo count($_SESSION['bestellingprijs'])?></span>
          </h4>
          <ul class="list-group mb-3">
            <?php 
            for ($i=0; $i<=count($_SESSION['bestellingproduct']) - 1; $i++ ) {  // de product en de prijs wordt geloopt
              echo  "<li class='list-group-item d-flex justify-content-between lh-condensed'>
              <div>
              <h6 class='my-0'>".$_SESSION['bestellingproduct'][$i]."</h6>               
              </div>                           
              <span class='text-muted'>".$_SESSION['bestellingprijs'][$i]."</span>           
              </li>";     
            }
            ?>                 
            <li class="list-group-item d-flex justify-content-between">
            <span>Totaal</span>             
            <strong><?php if(empty($_SESSION['bestellingproduct'])){ //waneer de array leeg is wordt er een 0 weergeven
              echo 0;}
              elseif(count($_SESSION['bestellingproduct'] > 0)){ // zo niet tell de items in de array bij elkaar op 
                echo array_sum($_SESSION['bestellingprijs']);
              } ?></strong>
            </li>
          </ul>
          <!-- promotie code -->
          <form class="card p-2"> 
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Inwisselen</button>
              </div>
            </div>
          </form>
        </div>
        <!-- input from -->
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Facturatie adres</h4>
          <form method="post" action="">
            <div class="row">
              <div class="col-md-6 mb-3">       
                  <label for="firstName">Voornaam</label>
                  <input type="text" class="form-control" name="voornaam" id="firstName" placeholder="" value="" minlength="3" required>
                  <div class="invalid-feedback">
                    Geldige voornaam is vereist.
                  </div>
              </div>
              <div class="col-md-6 mb-3">
                          
                  <label for="lastName">Achternaam</label>
                  <input type="text" class="form-control" name="achternaam" id="lastName" placeholder="" value="" minlength="3" required>
                  <div class="invalid-feedback">
                    Geldige achternaam is vereist.
                  </div>
              </div>
            </div>

            <div class="mb-3">         
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" minlength="5" placeholder="you@example.com" required>
                <div class="invalid-feedback">
                  Voer een geldig e-mailadres in voor verzendupdates.
                </div>
            </div>

            <div class="row"> <!-- row -->
              <div class="col-md-6 mb-3">            
                  <label for="firstName">Straatnaam & huisnummer</label>
                  <input type="text" class="form-control" name="adres" id="firstName" placeholder="" value="" minlength="3" required>
                  <div class="invalid-feedback">
                    Geldige adres is vereist.
                  </div>
              </div>
              <div class="col-md-6 mb-3">       
                  <label for="lastName">Postcode</label>
                  <input type="text" class="form-control" name="postcode" id="lastName" placeholder="" value="" minlength="6" required>
                  <div class="invalid-feedback">
                    Geldige postcode is vereist.
                  </div>                
              </div>
            </div>

            <div class="mb-3">              
                <label for="place">Woonplaats</label>
                <input type="text" class="form-control" name="woonplaats" id="email" placeholder="" minlength="2" required>
                <div class="invalid-feedback">
                  Voer een geldig e-mailadres in voor verzendupdates.
                </div>              
            </div>
          
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Verzendadres is hetzelfde als mijn factuuradres</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Bewaar deze informatie voor de volgende keer</label>
            </div>
            <hr class="mb-4">
            <!-- betaling sectie -->
            <h4 class="mb-3">Betaling</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Creditcard</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debetkaart</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="bitcoin" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="bitcoin">Bitcoin</label>
              </div>              
            </div>           
            <hr class="mb-4">
            <!-- bestel knop -->
            <button class="btn btn-primary btn-lg btn-block" name="afrekenen" type="submit">Doorgaan met afrekenen</button>
          </form>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>