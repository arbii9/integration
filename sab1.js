console.log("test");
function verifier() 
{ 


    
    //tous les champs

var id=document.f.idd.value; 

    if(id=="")
  {
   document.getElementById("error").innerHTML="Tous les champs doivent etre remplis: vous avez obliez de passer l'id du commande";
   document.getElementById("champs3").style.border = '#CC3300 2px solid';
   document.getElementById("error").style.color = '#CC3300';
    return false; 
  }

var description=document.f.description.value;
  if(description=="select")
  {
   document.getElementById("error").innerHTML="Tous les champs doivent etre remplis: vous avez obliez de passer la déscription";
   document.getElementById("champs5").style.border = '#CC3300 2px solid';
   document.getElementById("error").style.color = '#CC3300';
    return false; 
  }


    var nbre=document.f.nbre.value;
var description=document.f.description.value;
   if(nbre=="select")
  {
   document.getElementById("error").innerHTML="Tous les champs doivent etre remplis: vous avez obliez de passer le nombre des étoiles";
   document.getElementById("champs4").style.border = '#CC3300 2px solid';
   document.getElementById("error").style.color = '#CC3300';
    return false; 
  }


    

    var type=document.f.typee.value;
    
    var nbre=document.f.nbre.value;
     if((type=="")||(id=="")||(description=="select")||(nbre=="select")) 
   {
	    document.getElementById("error").innerHTML="Tous les champs doivent etre remplis"; 
      document.getElementById("error").style.color = '#CC3300';
      //document.getElementById("error").style.border = '2px solid #999';
      document.getElementById("error").style.marginLeft = "70px";
	 return false;
   } 

   

else 
return true;
}