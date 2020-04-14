console.log("CA MARCHE");


function validatePass(){
    if(document.getElementById('password').value == 'simplon'){
        return true;
    }else{
        alert('Mauvais Mot de Passe');
        return false;
    }
}




/* _________formulaire de rechercher ____________*/


var act=document.querySelector(".act");

act.addEventListener("click",function(){

window.location.reload();


});


var annuler=document.querySelector("button.annuler");
    annuler.addEventListener("click",function(){

 var sections =document.querySelector("section.sections");

 sections.classList.add("hidden");

});


var search =document.querySelector("button.btns");

    search.addEventListener("click",function(){

var sections =document.querySelector("section.sections");

    sections.classList.remove("hidden");



var Form  = document.querySelector(".search");
var Input = document.querySelector("input[name=recherche]");
var listeJSON   = document.querySelector(".listeJSON");
var tableauJSON = [];   

Form.addEventListener("submit", function(event){
    
    event.preventDefault();

    var texteSaisi = Input.value;


    console.log(texteSaisi);

    formData = new FormData();

    formData.append("recherche", texteSaisi);

    fetch('recherche.php',
    {
        method: 'POST',
        body:   formData
    })
    .then(function(reponseServeur) {
        return reponseServeur.json();
    })
    .then(function(objetJSON) {
        tableauJSON = objetJSON;

      
        listeJSON.innerHTML = "";
        
        for(var a=0; a < tableauJSON.length; a++)
        {
            listeJSON.innerHTML += 
            `
            <div class="destination">
                    <h3>${tableauJSON[a].lieu}</h3>
                    <h4>${tableauJSON[a].pays}</h4>
                    <h5>${tableauJSON[a].categorie}</h5>
                    <h6>${tableauJSON[a].saison}</h6>
                    <p>${tableauJSON[a].description}</p>
                    <img src="${tableauJSON[a].image}" style  alt="">
                    
                    
               
                    
                </div>
            `
        }

    });

});
       




});


/*_________ fini la formualie de rechercher_________*/