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
            $identifiantFormulaire=$_REQUEST["identifiantFormulaire"]??"";
            if($identifiantFormulaire=="create"){
            require "php/controller/form-articles.php";
            }
            ?>
        </div>
    </form>
</section>

<section>
    <h3 class="soustitre-admin">Modifier la Destination</h3>



    <form method="post" class="admin" id="update" action="">
    
    
    <form id="update" class="admin" action="" method="post">
    

    <form method="post" class="admin" id="update" action="">
        

        <input type="text" name="image" required value="image">
        <input type="text" name="lieu" required placeholder="lieu">
        <input type="text" name="pays" required placeholder="pays">
        <input type="text" name="categorie" required placeholder="categorie">
        <input type="text" name="saison" required placeholder="saison">
        <textarea name="description" cols="60" rows="8" required placeholder="description"></textarea>
        <input type="decimal" name="prix" required placeholder="prix">
        <input type="text" name="id" required placeholder="entrez l'id">


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

<section>

    <h3 class="soustitre-admin">Supprimer la Destination</h3>

    <form method="post" class="admin" id="delete" action="">

        <input type="text" name="image" required value = "image">
        <input type="text" name="lieu" required value = "lieu">
        <input type="text" name="pays" required value = "pays">
        <input type="text" name="categorie" required value = "categorie">
        <input type="text" name="saison" required value = "saison">
        <textarea name="description" cols="60" rows="8" required placeholder="description"></textarea>
        <input type="decimal" name="prix" required placeholder="prix">

        <input type="hidden" name="identifiantFormulaire" value="delete">
        <Button type ="submit">Supprimer</button>

        <!-- Debug console.log "Etes vous sur de vouloir supprimer ce fichier" -->
        <div class="confirmation">
            <?php
            $identifiantFormulaire = $_REQUEST["identifiantFormulaire"]??"";
            If ($identifiantFormulaire=="delete"){
                require "php/controller/form_articles.php";
            }
            ?>
        </div>
    </form>
</section>