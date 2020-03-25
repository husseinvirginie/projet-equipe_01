<section>
    - image varchar(160)
    - lieu varchar(160)
    - pays varchar(160)
    - categorie varchar(160)
    - saison varchar(160)
    - description text
    - prix decimal(10,0)
    <h3>welcom man</h3>

    <form id="create" class="admin" action="" method="POST">
        <input type="text" name="image" required value="assets/img/photo1.jpg">
        <input type="text" name="lieu" required placeholder="lieu">
        <input type="text" name="pays" required placeholder="pays">
        <input type="text" name="categorie" required placeholder="categorie">
        <input type="text" name="saison" required placeholder="saison">
        <input type="decimal" name="prix" required placeholder="prix">


        <textarea name="description" cols="60" rows="8" required placeholder=" description"></textarea>
        <input type="hidden" name="identifiantFormulaire" value="create">

        <button type="submit">PUBLIER L'ARTICLE</button>
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