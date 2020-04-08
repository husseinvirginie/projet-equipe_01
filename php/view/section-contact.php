
        <section class="contact">
            <h2>Contact (COMING SOON)</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Repellat minus excepturi sed dolor, id quaerat. Recusand
                ae doloribus esse maiores non pariatur provident
                 voluptatem voluptates, totam eaque, iure nemo alias soluta!</p>

<form action="" method="POST" > 


      <input type="text" placeholder="NOM"  required name="nom"><br>

      <input  type="text" placeholder="PRENOM" required name="prenom"><br>

      <input type="text" placeholder="ADRESSE" required name="adresse"><br>

      <input type="text" placeholder="PAYS"   required name="pays"><br>

      <input type="text" placeholder="Email"  required name="email"><br>

      <textarea name="message" id="" cols="30" rows="10"></textarea>
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
          "adresse"     =>filter("adresse"),
          "pays"        =>filter("pays"),
          "email"       =>filter("email"),
          "message"     =>filter("message")
        ];
       
        
extract($tabAssoColonneValeur);



if     
($nom!=""
&&$prenom!=""
&&$adresse!=""
&&$pays!=""
&&$email!=""
&&$message!=""){


    
$requeteSQL=

<<<code

INSERT INTO messages

(nom,prenom,adresse,pays,email,message)

VALUES

(:nom,:prenom,:adresse,:pays,:email,:message)

code;


require_once "php/model/envoyer-sql.php";


     echo "MERCI  $requeteSQL";
}

else

{
  echo "VEUILLEZ REMPLIR TOUS LES CHAMPS OBLIGATOIRES";


}






      