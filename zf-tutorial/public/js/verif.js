
function Nom(){
   	if(nom.value)
		{
        document.getElementById("nom-label").innerHTML="Nom valide";
        document.getElementById("nom-label").style.color="rgb(0, 255, 0)";
    } 
    else{document.getElementById("nom-label").innerHTML="Nom obligatoire";
         document.getElementById("nom-label").style.color="rgb(255, 0, 0)";}
}

function Prenom(){
   
	if(prenom.value)
		{
        document.getElementById("prenom-label").innerHTML="Prénom valide";
        document.getElementById("prenom-label").style.color="rgb(0, 255, 0)";
    } 
    else{document.getElementById("prenom-label").innerHTML="Prénom obligatoire";
         document.getElementById("prenom-label").style.color="rgb(255, 0, 0)";}
}

function email(){
   
                  if (!(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,6}$/.test(email.value))) {
        document.getElementById("email-label").innerHTML="Email invalide";
        document.getElementById("email-label").style.color="rgb(255, 0, 0)";
    } 
    else{document.getElementById("email-label").innerHTML="Email valide";
         document.getElementById("email-label").style.color="rgb(0, 255, 0)";}
}
