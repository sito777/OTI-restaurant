<?php
session_start();
// var_dump($_SESSION);
// voorraad producten
$voorraad = array(10,10,20,10,20,20,50,50,50,50,50,50);
// producten
$product = array("zoetbroodje","pannenkoek","salade","kerstcake","krabburger","robust","water","sprite","cola","fanta","appelsap","pepsi");
// prijzen producten
$prijs = array(8,6,5,10,7,7,2,3,3,3,3,3);
//bestelling arrat
$_SESSION['bestellingproduct'] = array();
$_SESSION['bestellingprijs'] = array();

if ($_POST['zoetbroodje']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[0]);
    array_push($_SESSION['bestellingprijs'], $prijs[0]);
}

if ($_POST['pannenkoek']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[1]);
    array_push($_SESSION['bestellingprijs'], $prijs[1]);
}

if ($_POST['salade']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[2]);
    array_push($_SESSION['bestellingprijs'], $prijs[2]);
}

if ($_POST['kerstcake']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[3]);
    array_push($_SESSION['bestellingprijs'], $prijs[3]);
}

if ($_POST['krabburger']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[4]);
    array_push($_SESSION['bestellingprijs'], $prijs[4]);
}

if ($_POST['robust']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[5]);
    array_push($_SESSION['bestellingprijs'], $prijs[5]);
}

if ($_POST['water']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[6]);
    array_push($_SESSION['bestellingprijs'], $prijs[6]);
}

if ($_POST['sprite']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[7]);
    array_push($_SESSION['bestellingprijs'], $prijs[7]);
}

if ($_POST['cola']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[8]);
    array_push($_SESSION['bestellingprijs'], $prijs[8]);
}

if ($_POST['fanta']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[9]);
    array_push($_SESSION['bestellingprijs'], $prijs[9]);
}

if ($_POST['appelsap']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[10]);
    array_push($_SESSION['bestellingprijs'], $prijs[10]);
}

if ($_POST['pepsi']) { // item word in de bestllingproduct en bestellingprijs array gepusht
    array_push($_SESSION['bestellingproduct'], $product[11]);
    array_push($_SESSION['bestellingprijs'], $prijs[11]);
}



// variables aanmaken voor de input van de gebruiker
$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$email = $_POST["email"];
$adres = $_POST["adres"];
$postcode = $_POST["postcode"];
$woonplaats = $_POST["woonplaats"];

if (isset($_POST['afrekenen'])) { 

   $onderwerp = 'Bestelling Oti';
   $inhoudmail = 'Bedankt voor je bestelling '. $voornaam ." Uw eten wordt met liefde bereid. Vol uw bestelling met de bestellingslink 22342";
   $header = 'Van: michelin@oti.com';

   mail($email, $onderwerp, $inhoudmail, $header ); //waneer de klant op afrekenen drukt word er een email verstuurd
}

?>
