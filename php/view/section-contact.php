<section class="contact">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Repellat minus excepturi sed dolor, id quaerat. Recusand
                ae doloribus esse maiores non pariatur provident
                 voluptatem voluptates, totam eaque, iure nemo alias soluta!</p>

<form action="" method="POST" > 


      <input type="text" placeholder="NOM"  required name="nom"><br>

      <input  type="text" placeholder="PRENOM" required name="prenom"><br>

      <input type="text" placeholder="ADRESSE" required name="adresse"><br>

      
        <select id="country" required name="pays" placeholder="PAYS">
      <option value="">PAYS</option>
      <option value="CANADA">CANADA</option>
      <option value="FRANCE">FRANCE</option>
      <option value="AFRIQUE">AFRIQUE</option>
      <option value="ASIE">ASIE</option>
      <option value="USA">USA</option>
    </select>

      <input type="text" placeholder="Email"  required name="email"><br>

      <textarea name="message" id=""  placeholder="MESSAGES" cols="30" rows="10"></textarea>


      <button type="submit" class="btn">ENVOYER</button>
      
        <div>

        
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


    
?>
</div>

</form>
        </section>