<?php
//On créer une fonction pour filtrer les information

function filtrer($name="id")
{
    $resultat=$_REQUEST[$name] ?? "";
    return $resultat;
}
$identifiantFormulaire = filtrer("identifiantFormulaire");

// identifiant formulaire

if($identifiantFormulaire =="update"){
// On récupère les informations envoyées par le naviguateur.
 $tabAssoColonneValeur = [
        "id"            => filtrer("id"),
        "image"         => filtrer("image"),
        "description"   => filtrer("description"),
        "lieu"          => filtrer("lieu"),
        "pays"          => filtrer("pays"),
        "categorie"     => filtrer("categorie"),
        "saison"        => filtrer("saison"),
        "prix"          => filtrer("prix"),
    ];

    // On utilise ce raccourci pour pour créer les variables à partir du tableau.
    extract($tabAssoColonneValeur);
// On vérifie les valeurs
    if(
        $id          !=""
     && $image       !=""
     && $description !=""
     && $lieu        !=""
     && $pays        !=""
     && $categorie   !=""
     && $saison      !=""
     && $prix        !=""
    ){
        $requeteSQL =
<<<CODESQL
UPDATE destinations
SET
        image=:image,
        description=:description,
        lieu=:lieu,
        pays=:pays,
        categorie=:categorie,
        saison=:saison,
        prix=:prix
WHERE 
id=:id;
CODESQL;
// on envoye la requete 
        require_once "php/model/envoyer-sql.php";

        echo "La destination est modifiée";
    }
    
}

if($identifiantFormulaire == "delete")
{
    $tabAssoColonneValeur = [
        "id"    => filtrer("id"),
    ];
extract($tabAssoColonneValeur);
$id=intval($id);
if($id>0){
        $requeteSQL=
<<<CODESQL
DELETE FROM destinations
WHERE id=:id
CODESQL;

    require_once "php/model/envoyer-sql.php";

    echo"Votre article est supprimée";
}
}


if ($identifiantFormulaire == "create")
{
    // CODE DE TRAITEMENT DU FORMULAIRE DE CREATE,

    // DEBUG
    // echo "JE DOIS TRAITER LE FORMULAIRE";

    // $_REQUEST EST UN TABLEAU ASSOCIATIF

    /*
    // ETAPE1: RECUPERER LES INFOS DU FORMULAIRE
    $titre           = $_REQUEST["titre"];
    $contenu         = $_REQUEST["contenu"];
    $image           = $_REQUEST["image"];
    $datePublication = $_REQUEST["datePublication"];
    $categorie       = $_REQUEST["categorie"];
        // ON PASSE PAR UN TABLEAU SUPPLEMENTAIRE
    // OU ON VA DONNER LES VALEURS EXTERIEURES A MEMORISER
    // SIMPLIFICATION: JE PEUX ENLEVER LES :
    $tabAssoColonneValeur = [
        "titre"            => $titre,
        "contenu"          => $contenu,
        "image"            => $image,
        "datePublication"  => $datePublication,
        "categorie"        => $categorie,
    ];
    */

    // CONSEIL: UTILISER LES MEMES NOMS PARTOUT
    // "nom de la colonne SQL" => $_REQUEST["attribut name HTML"]


    $tabAssoColonneValeur = [
        
        "image"            => filtrer("image"),
        "description"      => filtrer("description"),
        "lieu"             => filtrer("lieu"),
        "pays"             => filtrer("pays"),
        "categorie"        => filtrer("categorie"),
        "saison"           => filtrer("saison"),
        "prix"             => filtrer("prix"),
    ];
    // RACCOURCI POUR CREER LES VARIABLES A PARTIR DU TABLEAU ASSOCIATIF
    extract($tabAssoColonneValeur);

    // IL FAUT RAJOUTER DE LA SECURITE
    // POUR VALIDER QUE TOUTES LES INFOS NECESSAIRES SONT PRESENTES
    if ($image != "" 
            && $description != ""
            && $lieu != ""
            && $pays != ""
            && $categorie != ""
            && $saison != ""
            && $prix != "")
    {
        // SCENARIO OK
        // ETAPE2: ON VA CONSTRUIRE LA REQUETE SQL INSERT
        // POUR SE PROTEGER, ON NE VA PAS CONCATENER AVEC DES ELEMENTS EXTERIEURS
        // ON PREPARE LE CODE SQL ET PLUS TARD ON VA L'EXECUTER
        $requeteSQL   =
<<<CODESQL
INSERT INTO destinations
( image, description, lieu, pays, categorie, saison, prix)
VALUES
( :image, :description, :lieu, :pays, :categorie, :saison, :prix) 
CODESQL;


        // ETAPE3: ON VA ENVOYER LA REQUETE SQL 
        // JE CHARGE LE CODE PHP POUR ENVOYER LA REQUETE
        require_once "php/model/envoyer-sql.php";

        // MESSAGE DE CONFIRMATION
        echo "you are there ($requeteSQL)";
    }
    else
    {
        // SCENARIO KO
        // MESSAGE DE CONFIRMATION
        echo "VEUILLEZ REMPLIR TOUS LES CHAMPS OBLIGATOIRES";
    }

}

// est ce que quelqu'un peut essayer!!


