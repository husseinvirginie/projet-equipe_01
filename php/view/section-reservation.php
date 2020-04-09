<section class="Réservation">
            <h2>Réservation</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Repellat minus excepturi sed dolor, id quaerat. Recusand
                ae doloribus esse maiores non pariatur provident
                 voluptatem voluptates, totam eaque, iure nemo alias soluta!</p>

<form action="" method="POST" > 


      <input type="text" placeholder="NOM"  required name="nom"><br>

      <input  type="text" placeholder="PRENOM" required name="prenom"><br>

      <input  type="text" placeholder="age" required name="age"><br>

      <input  type="text" placeholder="visa numero" required name="visa"><br>

      <input type="text" placeholder="ADRESSE" required name="adresse"><br>

      <input type="text" placeholder="Email"  required name="email"><br>

      <input type="text" placeholder="telephon"   required name="telephon"><br>

      <textarea name="note" id="" cols="30" rows="10" required placeholder=" NOTES"></textarea>
      <button type="submit">ENVOYER</button>
      
</form>
        </section>

       
          <?php

        

  
        function filter($name){

            $resultat=$_REQUEST[$name]?? "";


            return $resultat;

        }

        $tabAssoColonneValeur=[

          "nom"         =>filter("nom"),
          "prenom"      =>filter("prenom"),
          "age"      =>filter("age"),
          "visa"      =>filter("visa"),
          "adresse"     =>filter("adresse"),
          "telephon"        =>filter("telephon"),
          "email"       =>filter("email"),
          "note"     =>filter("note")
        ];
       
        
extract($tabAssoColonneValeur);



if     
($nom!=""
&&$prenom!=""
&&$age!=""
&&$visa!=""
&&$adresse!=""
&&$telephon!=""
&&$email!=""
&&$note!=""){


    
$requeteSQL=
<<<code
INSERT INTO reservation
(nom,prenom,age,visa,adresse,telephon,email,note)
VALUES
(:nom,:prenom,:age,:visa,:adresse,:telephon,:email,:note)
code;


require_once "php/model/envoyer-sql.php";


     echo "MERCI  $requeteSQL";
}

else

{
  echo "VEUILLEZ REMPLIR TOUS LES CHAMPS OBLIGATOIRES";


}