<section>
    <!-- 
    - image         varchar(160)
    - lieu          varchar(160)
    - pays          varchar(160)
    - categorie     varchar(160)
    - saison        varchar(160)
    - description   text
    - prix          decimal(10,2)
    -->
    <h2>Admin</h2>
    <h3 class="soustitre-admin">Créer la Destination</h3>

    <form id="create" class="admin" action="" method="POST">
        <input type="text" name="image" required value="assets/img/">
        <input type="text" name="lieu" required placeholder="lieu">
        <input type="text" name="pays" required placeholder="pays">
        <input type="text" name="categorie" required placeholder="categorie">
        <input type="text" name="saison" required placeholder="saison">
        <textarea name="description" cols="60" rows="8" required placeholder=" description"></textarea>
        <input type="decimal" name="prix" required placeholder="prix"><!-- tu es sur de type="decimal"-->

        <input type="hidden" name="identifiantFormulaire" value="create">
        <button type="submit">Valider</button>
        <!-- POUR L'IMAGE, ON DEVRAIT PROPOSER UN UPLOAD => PLUS TARD... -->

        <div class="confirmation">
            <?php
            $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
            if($identifiantFormulaire=="create"){
            require "php/controller/form-articles.php";
            }
            ?>
        </div>
    </form>
</section>

<section class="updateSection cache">
    <button class="closePopup">Fermer la Popup </button>
    <h3 class="soustitre-admin">Modifier la Destination</h3>
    
    <form id="update" class="admin" action="" method="POST">
      <div class="infoUpdate">  
        <input type="text" name="image" required value="image">
        <input type="text" name="lieu" required placeholder="lieu">
        <input type="text" name="pays" required placeholder="pays">
        <input type="text" name="categorie" required placeholder="categorie">
        <input type="text" name="saison" required placeholder="saison">
        <textarea name="description" cols="60" rows="8" required placeholder="description"></textarea>
        <input type="decimal" name="prix" required placeholder="prix">
        <input type="text" name="id" required placeholder="entrez l'id">
        </div>

        <input type="hidden" name="identifiantFormulaire" value="update">
        <button type="submit">Modifier</button>
        
        <div class="confirmation">  
            <?php
            $identifiantFormulaire=$_REQUEST["identifiantFormulaire"]??"";
            if($identifiantFormulaire=="update"){
                require "php/controller/form-articles.php";
            }
            ?>
        </div>
    </form>
</section>

<section class="cache">

    <h3 class="soustitre-admin">Supprimer la Destination</h3>

    <form method="POST" id="delete" action="">

        <input type="text" name="id" required placeholder="entrez l'id">

        <input type="hidden" name="identifiantFormulaire" value="delete">
        <button type ="submit">Supprimer</button>

        <!-- Debug console.log "Etes vous sur de vouloir supprimer ce fichier" -->
        <div class="confirmation">
            <?php
            $identifiantFormulaire = $_REQUEST["identifiantFormulaire"]??"";
            if ($identifiantFormulaire=="delete"){
                require "php/controller/form-articles.php";
            }
            ?>
        </div>
    </form>
</section>
<section>
            <h2>Liste des destinations </h2>

            <table>
                <thead>
                <tr>
                    <td>id</td>
                    <td>image</td>
                    <td>lieu</td>
                    <td>pays</td>
                    <td>categorie</td>
                    <td>saison</td>
                    <td>description</td>
                    <td>prix</td>
                    <td> Modifier </td>
                    <td> Supprimer </td>
                </tr>
                </thead>
                <tbody>
                    <?php

                $requeteSQL=
                <<<CODESQL
                SELECT * FROM `destinations`
                ORDER BY id DESC
                CODESQL;
            $tabAssoColonneValeur=[];

            require "php/model/envoyer-sql.php";

            $tabLigne= $pdoStatement->fetchAll();


            foreach($tabLigne as $tabAsso){
                extract($tabAsso);

            echo
            <<<CODEHTML
        <tr>
                <td>$id</td>
                <td>$image</td>
                <td>$lieu</td>
                <td>$pays</td>
                <td>$categorie</td>
                <td>$saison</td>
                <td>$description</td>
                <td>$prix</td>
                <td><button data-id="$id" class="update">Modifier</button>
                <div class="infoUpdate cache">
         <input type="text" name="image" required value="$image">
        <input type="text" name="lieu" required placeholder="lieu" value="$lieu">
        <input type="text" name="pays" required placeholder="pays" value="$pays">
        <input type="text" name="categorie" required placeholder="categorie" value="$categorie">
        <input type="text" name="saison" required placeholder="saison" value="$saison">
        <textarea name="description" cols="60" rows="8" required placeholder="description">$description</textarea>
        <input type="decimal" name="prix" required placeholder="prix" value="$prix">
        <input type="text" name="id" required placeholder="entrez l'id" value="$id">
                </div>
                </td>
                <td><button data-id="$id" class="delete">Supprimer</button></td>
            </tr>

        CODEHTML;
            }
             ?>   
                </tbody>
            </table>

</section>


<script>
    var boutonClose= document.querySelector("button.closePopup");
    boutonClose.addEventListener("click", function(){
        var baliseSectionUpdate=document.querySelector("section.updateSection");
        baliseSectionUpdate.classList.add("cache");
        console.log("ok");
    });

    var listeBoutonUpdate=document.querySelectorAll("button.update");
    listeBoutonUpdate.forEach(function(bouton){
        bouton.addEventListener("click",function(event){
            console.log("click sur un bouton");
            var baliseBouton=event.target;
            var baliseTd= baliseBouton.parentNode;
            var baliseUpdate=baliseTd.querySelector(".infoUpdate");
console.log ("balisebouton");
            var baliseUpdateForm=document.querySelector("form#update div.infoUpdate");
            baliseUpdateForm.innerHTML=baliseUpdate.innerHTML;
            
            var baliseSection= document.querySelector(".updateSection");
            baliseSection.classList.remove("cache");
            console.log("cache");
        });

    });

    var listeBoutonDelete=document.querySelectorAll("button.delete");
    listeBoutonDelete.forEach(function(bouton){
        console.log("bouton");
        bouton.addEventListener("click",function(event){
            console.log("tu as cliqué");
            var idBouton=event.target.getAttribute("data-id");
            console.log("champsId");
            var champId=document.querySelector("form#delete input[name=id]");
            champId.value= idBouton;

                var confirmation=window.confirm("Est tu sur?");
                if (confirmation){ console.log("oui");
                    var formDelete=document.querySelector("form#delete");
                    console.log("delete");
                    formDelete.submit();
                } else{
                    console.log("nul");
                }
        });
    });
</script>