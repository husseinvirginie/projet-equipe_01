<section>
  <h2>Réservation</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Repellat minus excepturi sed dolor, id quaerat. Recusand
    ae doloribus esse maiores non pariatur provident
    voluptatem voluptates, totam eaque, iure nemo alias soluta!</p>

  <form method="POST" action="">

    <label><i class="fa fa-plane" style="font-size:24px"></i> Destination</label>
    <input type="text" id="" required name="destination" placeholder="Phu Quoc">

    <label><i class="fa fa-calendar" style="font-size:24px"></i> Date de Départ</label>
    <input type="text" id="" required name="date" placeholder="2020-05-25">

    <label><i class="fa fa-clock-o"></i> Durée</label>
    <input type="text" required name="duree" placeholder="1 semaine">

    <label><i class="fa fa-institution"></i> Ville de Départ</label>
    <input type="text" required name="ville" placeholder="Marseille">

    <label><i class="fa fa-user"></i> Nombre d'Adultes</label>
    <input type="number" required name="adulte" placeholder="0">

    <label><i class="fa fa-user"></i> Nombre d'Enfants</label>

    <input type="number" required name="enfant" placeholder="0">


    <label class="titre-paiement">Paiement</label>

    <label>Nom sur la Carte<div class="payment">
        <i class="fa fa-cc-visa" style="color:navy;"></i>
        <i class="fa fa-cc-amex" style="color:blue;"></i>
        <i class="fa fa-cc-mastercard" style="color:red;"></i>
        <i class="fa fa-cc-discover" style="color:orange;"></i>
      </div>
    </label>
    <input type="text" required name="nom" placeholder="Nom">

    <label>Numéro de la Carte</label>
    <input type="text" required name="nombrecarte" placeholder="1111-2222-3333-1212">

    <button class="btn" type="submit">Réserver</button>


    <div class="confirmation">

      <?php

      function filter($name)
      {

        $resultat = $_REQUEST[$name] ?? "";

        return $resultat;
      }

      $tabAssoColonneValeur = [

        "destination"  => filter("destination"),
        "date"         => filter("date"),
        "duree"       => filter("duree"),
        "ville"       => filter("ville"),
        "adulte"      => filter("adulte"),
        "enfant"      => filter("enfant"),
        "nom"         => filter("nom"),
        "nombrecarte" => filter("nombrecarte")
      ];

      extract($tabAssoColonneValeur);

      if (
        $destination != ""
        && $date != ""
        && $duree != ""
        && $ville != ""
        && $adulte != ""
        && $enfant != ""
        && $nom != ""
        && $nombrecarte != ""
      ) {

         

   
        $requeteSQL=


        <<<code
        INSERT INTO reservation
        (destination,date,duree,ville,adulte,enfant,nom,nombrecarte)
        VALUES
        (:destination,:date,:duree,:ville,:adulte,:enfant,:nom,:nombrecarte)
        code;


        require_once "php/model/envoyer-sql.php";


        echo "MERCI  $requeteSQL";
        } 

        ?>
      </div>

  </form>
</section>


<section class="recherche">
  
    <h3 class="titre-recherche">Rechercher une Destination</h3>

    <form class="search" action="">
    <input type="text" name="recherche" required placeholder="Entrer un mot">
    <button type="submit">Lancer la recherche</button>
    </form>

    <div class="listeJSON"></div>
    

    <script>
    // FORMULAIRE DE RECHERCHE
    // BLOQUER LE FORMULAIRE CLASSIQUE
    var baliseForm  = document.querySelector(".search");
    var baliseInput = document.querySelector("input[name=recherche]");
    var listeJSON   = document.querySelector(".listeJSON");
    var tableauJSON = [];   // AU DEPART LE TABLEAU EST VIDE

    baliseForm.addEventListener("submit", function(event){
      // POUR BLOQUER L'ENVOI DU FORMULAIRE
      event.preventDefault();

      // ON DOIT RECUPERER LE TEXTE SAISI
      var texteSaisi = baliseInput.value;

      // DEBUG
      console.log(texteSaisi);

      // ET ON DOIT ENVOYER UNE REQUETE AJAX VERS recherche-api.php
      // ET ENSUITE ON RECUPERE LES INFOS JSON
      // ET ON CONSTRUIT LE HTML POUR AFFICHER LES ARTICLES

      // formData PERMET DE RAJOUTER DES INFORMATIONS SUPPLEMENTAIRES A ENVOYER VERS PHP
      formData = new FormData();
      // ON VA AJOUTER LE TEXTE SAISI
      formData.append("recherche", texteSaisi);

      fetch('recherche.php',
      {
          method: 'POST',
          body:   formData
      })
      .then(function(reponseServeur) {
          return reponseServeur.json();
      })
      .then(function(objetJSON) {
          tableauJSON = objetJSON;

      // ON VA REINITIALISER LA LISTE
      listeJSON.innerHTML = "";
      
      for(var a=0; a < tableauJSON.length; a++)
      {
          listeJSON.innerHTML += 
          `
              <article>
                  <h3>${tableauJSON[a].lieu}</h3>
                  <h4>${tableauJSON[a].pays}</h4>
                  <h5>${tableauJSON[a].categorie}</h5>
                  <h6>${tableauJSON[a].saison}</h6>
                  <p>${tableauJSON[a].description}</p>
                
                  <div class="prix">${tableauJSON[a].prix} €</div>
  
              </article>
          `
      }


      });




      });
    </script>
<section>

