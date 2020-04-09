<section class="reservation">

  <form method="POST" action="">

    <label><i class="fa fa-plane" style="font-size:24px"></i>Destination*</label>

    <input type="text" id="" required name="destination" placeholder="FRANCE">


    <label><i class="fa fa-calendar" style="font-size:24px"></i> Date de depart*</label>


    <input type="text" id="" required name="date" placeholder="2000-02-23">

    <label>Durée*</label>

    <input type="text" required name="duree" placeholder="">

    <label> <i class="fa fa-institution"></i>ville de départ*</label>

    <input type="text" required name="ville" placeholder="NEW YORK">

    <label><i class="fa fa-user"></i>Nombre d'adulte*</label>
    <input type="number" required name="adulte">

    <label><i class="fa fa-user"></i>Nombre d'enfant*</label>

    <input type="number" required name="enfant">



    <label>PAYMENT</label>
    <label>LE NOM SUR LA CARTE<div class="payment">
        <i class="fa fa-cc-visa" style="color:navy;"></i>
        <i class="fa fa-cc-amex" style="color:blue;"></i>
        <i class="fa fa-cc-mastercard" style="color:red;"></i>
        <i class="fa fa-cc-discover" style="color:orange;"></i>
      </div>

    </label>

    <input type="text" required name="nom">
    <label>LE NUMERO DE LA CARTE</label>
    <input type="text" required name="nombrecarte" placeholder="1111-2222-3333-1212">

    <button class="btn" type="submit">RESERVE</button>



    <div class="traiter">

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



        $requeteSQL =

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


</div>
            <form class="search" action="">
            <input type="text" name="recherche" required placeholder="entrez un mot">
            <button type="submit">lancer la recherche</button>
        </form>
            <div class="listeJSON"></div>
        </section>
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
                  
                    <h6>${tableauJSON[a].prix} €</h6>
                  
                    <img class="image-destination" src="${tableauJSON[a].image}" alt="image">
                   
                 
                    
                  
                    
               
                    
                </article>
            `
        }

    });

});
        </script>