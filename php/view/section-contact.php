<section>
      <h2>Contact</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Repellat minus excepturi sed dolor, id quaerat. Recusand
      ae doloribus esse maiores non pariatur provident
      voluptatem voluptates, totam eaque, iure nemo alias soluta!</p>

      <form action="" method="POST"> 

      <input type="text" placeholder="Nom" required name="nom">

      <input  type="text" placeholder="Prénom" required name="prenom">

      <input type="text" placeholder="Adresse" required name="adresse">

      <select id="country" required name="pays" placeholder="Pays">
      <option value="">Pays</option>
      <option value="CANADA">Canada</option>
      <option value="FRANCE">France</option>
      <option value="AFRIQUE">Afrique</option>
      <option value="ASIE">Asie</option>
      <option value="USA">Usa</option>
      </select>

      <input type="text" placeholder="Email" required name="email">

      <textarea name="message" id="" placeholder="Message" required cols="30" rows="10"></textarea>

      <button type="submit" class="btn">Envoyer</button>


      <div class="confirmation">
        
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