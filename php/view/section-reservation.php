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