<?php
if($_POST):
$prenom=$_POST["firstname"];
$nom=$_POST["lastname"];
$mail=$_POST["email"];
$msg=$_POST["message"];
$sujet=$_POST["sujet"];

$texte= "Nouveau message de ".$prenom." ".$nom." ".$sujet." (".$mail.") : ".$msg;

$headers = 'From:'.$mail . "\r\n" . 
          'Reply-To:'.$mail . "\r\n" .
         'X-Mailer: PHP/' . phpversion();

         if(mail("cariou.liam@orange.fr", "Nouveau message", $texte,$headers )):

             $sqlQuery = 'INSERT INTO liamcariou(nom, prenom, sujet, msg, email) VALUES ("'.$nom.'", "'.$prenom.'", "'.$sujet.'", "'.$msg.'", "'.$mail.'")';

            $mysqlConnection = new PDO(  'mysql:host=localhost;dbname=u801021231_liamcariou;charset=utf8',
              'u801021231_liamcariou',
                'ftp21pir@teFTP21'
              );


            $mysqlConnection->query($sqlQuery); 

            //var_dump($mysqlConnection->errorInfo());

            $confirme="oui";
            endif;

            endif;
            ?>

            <?php

            ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - liam cariou - liamcariou.fr</title>
    <link rel="icon" href="img/logo.png"></title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a href="#" class="navbar-brand">
            <img src="img/logo.png" width="85" alt="" class="d-inline-block align-middle mr-2">
            <span class="text-uppercase font-weight-bold">Liam Cariou</span>
          </a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.html" class="nav-link">Accueil</a></li>
              <li class="nav-item "><a href="quisuisje.html" class="nav-link">Qui suis-je ? <span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a href="portfolio.html" class="nav-link">Portfolio</a></li>
              <li class="nav-item"><a href="cv.html" class="nav-link">CV</a></li>
              <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="login.php" class="nav-link">Admin</a></li>
            </ul>
          </div>
        </div>
      </nav>


<section class="back-contact">

<div class="allcontact">

<div class="formulaireall">
     <div class="contentformulaire"><h1 class="titreh1contact">Contactez moi !</h1></div>

<?php
if ($confirme=="oui"):
  ?>
<p>Votre message a bien été envoyé ! Je vous y reponds au plus vite. </p>
 <?php
 else:
 ?>
<form method="post" action="contact.php">
 
<label for="fname">Prénom :</label>
<input type="text" id="fname" class="inputcontact" name="firstname" placeholder="Prénom..">
<div class = "rouge cache" id="name"><strong> Veuillez rentrer votre Prénom </strong></div>
  <label for="lname">Nom :</label>
 <input type="text" id="lname" class="inputcontact" name="lastname" placeholder="Nom..">
 <div class = "rouge cache" id="llname"><strong> Veuillez rentrer votre Nom </strong></div>
     <label for="email">Votre Email :</label>
    <input type="text" id="email" class="inputcontact" name="email" placeholder="Email..">
    <div class = "rouge cache" id="lemail"><strong> Veuillez rentrer votre Email</strong></div>

 <label for="sujet">Sujet :</label>
 <select id="sujet" name="sujet">
    <label for="fname">Sujet :</label>
   <option value="demande">Questions</option>
   <option value="retour">Stage/Alternance</option>
      <option value="questions">Autres</option>
  </select>
<br>
    <label for="message">Message :</label>
 <textarea id="message" class="inputcontact" name="message" placeholder="Votre message..." style="height:200px"></textarea>
  <input type="submit" value="Envoyer" class="btncontact">
</form> 
 <?php
endif;
?>
</div>



  <div class="rscontactall">
    <div class="containerrs">
      <h2 class="titreh1contact">Réseaux sociaux</h2>
     
      <a href="https://github.com/liamcr21"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="rscontact"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
          </a>
     
      <a href="https://www.instagram.com/liamcariou_pro/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="rscontact"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
          </a>

          <a href="https://fr.linkedin.com/in/liamcariou?trk=public_profile_browsemap"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="rscontact"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
          </a>

    </div>
  </div>


</div>

</section>

<footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3" style="background-color: #343a40;">
      <p style="color: white;">© 2022 Par <a class="text-white" href="https://liamcariou.fr/">Liam Cariou.</a> Tous droits réservés.</p>
    </div>
  </footer>
<script src="script.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</body>
</html>