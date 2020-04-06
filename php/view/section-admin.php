
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

    <form id="create" class="admin" action="" method="POST">
        <input type="text" name="image" required value="assets/img/">
        <input type="text" name="lieu" required placeholder="lieu">
        <input type="text" name="pays" required placeholder="pays">
        <input type="text" name="categorie" required placeholder="categorie">
        <input type="text" name="saison" required placeholder="saison">
        <textarea name="description" cols="60" rows="8" required placeholder=" description"></textarea>
        <input type="decimal" name="prix" required placeholder="prix"><!-- tu es sur de type="decimal"-->

        <input type="hidden" name="identifiantFormulaire" value="create">

        <button type="submit">valider</button>
        <!-- POUR L'IMAGE, ON DEVRAIT PROPOSER UN UPLOAD => PLUS TARD... -->


        <div class="confirmation">
            <?php
            $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
            if ($identifiantFormulaire == "create") {
                require "php/controller/form-articles.php";
            }
            ?>
        </div>
    </form>
</section>

<section>
    <h2> Modifier la publication</h2>
    <form method="post" class="admin" id="update" action="">
        <div class="Update">
            <input type="text" name="image" required value="image">
            <input type="text" name="lieu" required placeholder="lieu">
            <input type="text" name="pays" required placeholder="pays">
            <input type="text" name="categorie" required placeholder="categorie">
            <input type="text" name="saison" required placeholder="saison">
            <textarea name="description" cols="60" rows="8" required placeholder=" description"></textarea>
            <input type="decimal" name="prix" required placeholder="prix">
            <input type="text" name="id" required placeholder="entrez l'id">
        </div>

        <input type="hidden" name="identifiantFormulaire" value="update">
        <button type="submit"> Modifier </button>
        
        <div class="confirmation">
        
            <?php
             $identifiantFormulaire=$_REQUEST["identifiantFormulaire"]??"";
             if($identifiantFormulaire=="update")
             {require "php/controller/form-articles.php";}
            ?>
        </div>

    </form>
</section>
