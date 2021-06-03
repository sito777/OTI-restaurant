<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="COVID proof online restaurant">
        <meta name="author" content="Darnell">

        <title>OTI Michelin</title>

        <!-- CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
      
    </head>
    <body>
        <?php include 'php/oti.php'?> 
        <!-- navigatie -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #ffa500;">
        <a class="navbar-brand" href="#">OTI Michelin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gerechten">Gerechten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#frisdranken">Frisdranken</a>
                </li>        
            </ul>
        </div>
        <span class="navbar-text">
            <a href="pages/checkout.php" class="cart"><?=(isset($_SESSION['bestellingprijs']) ? count($_SESSION['bestellingprijs']) : '');?> <img src="img/iconmonstr-basket-4-240.png"></a>
          </span>
        </nav>
        <!-- body -->
        <main>
            <!-- header  -->
            <div class="banner">
                <img class="card-img" src="img/banner.jpg" alt="Card image">
            </div>
            <!-- Gerechten -->        
            <div class="container">
                <form action="pages/checkout.php" method="POST">
                <div id="gerechten"> <!-- gerechten sectie -->
                    <h3>Gerechten</h3>
                    <div class="row items">  <!-- row -->
                        <div class="col-4">
                            <div class="card">
                                <img class="card-img-top" src="img/sweetbread.jpg" alt="zoet brood">
                                <div class="card-body">
                                    <p class="card-text">Zoet broodje</p>
                                    <input type="checkbox" name="zoetbroodje" value="zoetbroodje"><label>bestellen</label><br/>
                                </div>                                                                
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img class="card-img-top" src="img/bananenpannenkoek.jpeg" alt="pannenkoek">
                                <div class="card-body">
                                    <p class="card-text">Bananen pannenkoek</p>
                                    <input type="checkbox" name="pannenkoek" value="pannenkoek"><label>bestellen</label><br/>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img class="card-img-top" src="img/mansasalade.jpg" alt="gezonde salade">
                                <div class="card-body">
                                    <p class="card-text">Salade</p>
                                    <input type="checkbox" name="salade" value="salade"><label>bestellen</label><br/>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="row items"> <!-- row -->
                        <div class="col-4">
                            <div class="card">                                                                    
                                <img class="card-img-top" src="img/warmtecake.jpg" alt="kerst cake">
                                <div class="card-body">
                                    <p class="card-text">Heerlijke cake</p>
                                    <input type="checkbox" name="kerstcake" value="kerstcake"><label>bestellen</label><br/>
                                </div>                                
                            </div>
                        </div>
                    <div class="col-4">
                        <div class="card">                                                                    
                            <img class="card-img-top" src="img/krabburger.jpg" alt="krabburger">
                            <div class="card-body">
                                <p class="card-text">De orginele Krabburger</p>
                                <input type="checkbox" name="krabburger" value="krabburger"><label>bestellen</label><br/>
                            </div>                                
                        </div>
                    </div>
                    <div class="col-4">
                            <div class="card">
                                <img class="card-img-top" src="img/hamburgerrobust.jpg" alt="robust hamburger">
                                <div class="card-body">
                                    <p class="card-text">Een robuste hamburger</p>
                                    <input type="checkbox" name="robust" value="robust"><label>bestellen</label><br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="frisdranken"><!-- frisdranken sectie -->
                    <h3>Frisdranken</h3>
                    <div class="row items">  <!-- row -->
                        <div class="col-4">
                            <div class="card">
                                <img class="card-img-top" src="img/water.jpg" alt="water">
                                <div class="card-body">
                                    <p class="card-text">Water</p>
                                    <input type="checkbox" name="water" value="water"><label>bestellen</label><br/>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img class="card-img-top" src="img/sprite.jpg" alt="sprite">
                                <div class="card-body">
                                    <p class="card-text">Sprite</p>
                                    <input type="checkbox" name="sprite" value="sprite"><label>bestellen</label><br/>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">                                                                   
                                <img class="card-img-top" src="img/cocacola.jpg" alt="cola">
                                <div class="card-body">
                                    <p class="card-text">Coca cola</p>
                                    <input type="checkbox" name="cola" value="cola"><label>bestellen</label><br/>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="row items"> <!-- row -->
                        <div class="col-4">
                            <div class="card">                                                                   
                                <img class="card-img-top" src="img/fanta.jpg" alt="fanta">
                                <div class="card-body">
                                    <p class="card-text">Fanta</p>
                                    <input type="checkbox" name="fanta" value="fanta"><label>bestellen</label><br/>
                                </div>                               
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">                                                                   
                                <img class="card-img-top" src="img/appelsap.jpg" alt="appelsap">
                                <div class="card-body">
                                    <p class="card-text">Appelsap</p>
                                    <input type="checkbox" name="appelsap" value="appelsap"><label>bestellen</label><br/>
                                </div>                               
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img class="card-img-top" src="img/pepsi.jpg" alt="pepsi">
                                <div class="card-body">
                                    <p class="card-text">Pepsi</p>
                                    <input type="checkbox" name="pepsi" value="pepsi"><label>bestellen</label><br/>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>         

                <input type="submit" class="btn btn-warning" name="bestellen" value="Bestellen" />
            </form>    
        </div>

        </main>
        <!-- footer  -->
        <footer>
            <div class="container">
                <div class="row">
                    <ul class="footer" >
                        <li class="footer-item">
                            <a class="footer-link kopje-w h" href="#">Home</a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-link kopje-w h" href="#gerechten">Gerechten</a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-link kopje-w h" href="#frisdranken">Frisdranken</a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-link kopje-w h" href="pages/checkout.php">Winkelmandje</a>
                        </li>
                    </ul>
                </div>  
            </div>
        </footer>
    </body>
</html>