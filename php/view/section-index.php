
        <section>
            <h2>Nos Exclusivités Voyages</h2>
            <div class="listeDestination">
            <?php
            
            // READ

            // ETAPE 1: LANCER UNE REQUETE SQL EN LECTURE
            // POUR RECUPERER LES INFOS DE SQL
            // JE LANCE UNE REQUETE SUR MES DESTINATIONS ET JE LES CLASSE PAR ID DU PLUS ANCIEN AU PLUS RECENT
            $requeteSQL =
            <<<CODESQL
            SELECT * FROM `destinations`
            ORDER BY id ASC
            CODESQL;

            $tabAssoColonneValeur =[];

            // ETAPE 2: CONNECTER PHP A SQL
            // ETAPE 2A : ON ENVOIE LA REQUETE PREPAREE ET ON L'EXECUTE
            require_once "php/model/envoyer-sql.php";

            // ETAPE 3: JE RECUPERE MON TABLEAU DE RESULTATS
            // https://www.php.net/manual/fr/pdostatement.fetchall.php
            $tabLigne = $pdoStatement->fetchAll();

            // ON FAIT UNE BOUCLE POUR AFFICHER CHAQUE ARTICLE
            foreach($tabLigne as $tabAsso)
            {
                $id              = $tabAsso["id"];
                $image           = $tabAsso["image"];
                $lieu            = $tabAsso["lieu"];
                $pays            = $tabAsso["pays"];
                $categorie       = $tabAsso["categorie"];
                $saison          = $tabAsso["saison"];
                $description     = $tabAsso["description"];
                $prix            = $tabAsso["prix"];

                // SIMPLIFICATION
                // https://www.php.net/manual/fr/function.extract.php
                // extract CREE DES VARIABLES A PARTIR DES CLES DU TABLEAU ASSOCIATIF
                // extract($tabAsso); 

            // J'AFFICHE CHAQUE DESTINATION DANS MA PAGE
            echo
            <<<CODEHTML
                    <div class="destination">
                        <img class="image-destination" src="$image" alt="image">
                        <h3>$lieu</h3>
                        <h4>$pays</h4>
                        <h5>$categorie</h5>
                        <h6>$saison</h6>
                        <p>$description</p>
                        <div class="prix">$prix €</div>
                        <a href="reservation.php" class="bouton">Réserver</a> 
                    </div>
            CODEHTML;
            }

            // LES INFOS QUI NOUS INTERESSENT SONT DANS UNE TABLE SQL destinations
            // LA TABLE SQL A DES COLONNES image, lieu, etc... 
            // ET LES INFOS SONT GROUPEES DANS UNE MEME LIGNE

            ?>
