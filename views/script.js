console.log("test");
function verifier() 
{ 
	

	var value2=document.getElementById("choix").checked;
	var value1=document.getElementById("choix1").checked;
    
    if( (value2 === false ) || ( value1 === false ) )
     {
	 document.getElementById("error").innerHTML="vous devez choisir l'un des propositions";

		return false;	
	}

else 
return true;
}