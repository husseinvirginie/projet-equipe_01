<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les Iles Fantastiques</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <header>
        <nav class="nav-container">
            <a href="index.php"><img class="brand-logo" src="assets/img/logo01.png" alt="logo"></a>
            <a href="index.php">Accueil</a>
            <a href="reservation.php">Réservation</a>
            <a href="contact.php">Contact</a> 
            
            <!--_____formulaire de rechercher_____-->   
            <button class="btns" type="submit"><i class="fa fa-search"></i></button>

       
        </nav>
   
              
     <section class="sections hidden">
     <button class="act"><i class="fa fa-undo" style="font-size:36px;"></i>
</button>
    <h1 class="client" >Où souhaitez-vous voyager ?</h1>

    
    <form class="search" action="">

   
 
<input type="text" name="recherche" class="inp"><br>

<button type="submit" class="cherche">RECHERCHER</button>



</form>
<button  class="annuler">x</button>
</section>
<script src="assets/js.app.js"></script>

   
        <div class="subpage-header">
        <h1>Les Iles Fantastiques</h1>
        <p>Agence créée en 2020. Nous sommmes aujourd'hui leader dans le monde du voyage.<br>
        Découvrez notre sélection d'Iles paradisiaques tout autour du globe.</p>
        </div>
    </header>

    <main>
     <div class="listeJSON"></div> 

