console.log("CA MARCHE");


function validatePass(){
    if(document.getElementById('password').value == 'simplon'){
        return true;
    }else{
        alert('Mauvais Mot de Passe');
        return false;
    }
}


