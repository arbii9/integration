console.log("test");
function verifier() 
{ 


    
    //tous les champs

    var id=document.f.idd.value; 
    var type=document.f.typee.value;
    var description=document.f.description.value;
    var nbre=document.f.nbre.value;
     if((type=="")||(id=="")||(description=="select")||(nbre=="select")) 
   {
	 document.getElementById("error").innerHTML="Tous les champs doivent etre remplis"; 
	 return false;
   } 

   

else 
return true;
}