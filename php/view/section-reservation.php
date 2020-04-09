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
  
        function filter($name){

            $resultat=$_REQUEST[$name]?? "";

            return $resultat;

        }

        $tabAssoColonneValeur=[

          "destination"  =>filter("destination"),
          "date"         =>filter("date"),
          "duree"       =>filter("duree"),
          "ville"       =>filter("ville"),
          "adulte"      =>filter("adulte"),
          "enfant"      =>filter("enfant"),
          "nom"         =>filter("nom"),
          "nombrecarte" =>filter("nombrecarte")
        ];

        extract($tabAssoColonneValeur);

        if     
        ($destination!=""
        &&$date!=""
        &&$duree!=""
        &&$ville!=""
        &&$adulte!=""
        &&$enfant!=""
        &&$nom!=""
        &&$nombrecarte!=""){

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