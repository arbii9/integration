console.log("test");
function verifier() 
{ 
	

	
    /*cin
    var cin = document.f.cin.value;
	var longeur = cin.length;
	if(longeur!=8)
	{
	 document.getElementById("error").innerHTML="la taille de la cin doit etre egale a 8";

		return false;	
	}*/
    
    //nom et prenom
	var nom=document.f.nom.value;
	var prenom=document.f.prenom.value;
	var y=nom.charAt(0);
	var yy=prenom.charAt(0); 
	var z=y.toUpperCase(y);
	var zz=yy.toUpperCase(yy);
	if((y!=z))

	{ 
    
     document.getElementById("error").innerHTML="le nom doit comencez par une lettre majuscule";

		return false;
    } 

    if((yy!=zz)) 
   {
	 document.getElementById("error").innerHTML="le prenom doit commencez par une lettre  majuscule";

		return false;
   }  

  
    
    //date

    var mois = new Array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
    var day = new Array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
    var date = new Date();
    var message0 = day[date.getDate()];   // numero du jour
    var message1 = mois[date.getMonth()] + "-";   // mois
    var message2 = date.getFullYear() + "-";
    var message = message2+message1+message0;
    var date = document.f.datec.value;
    //alert(c)
    if (message!=date){
     document.getElementById("error").innerHTML="vous devez passer la date d'aujourd'hui"; 
	return false;	
    }

    //email
    var p="."; 
    var a="@";
    var mail=document.f.mail.value; 
    var x=mail.indexOf(a);
	var pp=p.indexOf(p);
	if((x==-1)||(pp==-1))
	{
    document.getElementById("error").innerHTML="verifier votre adresse mail"; 
	return false;
		
	} 

	//num tel

	var num = document.f.num.value;
	var longeur = num.length;
	if(longeur!=8)
	{
	 document.getElementById("error").innerHTML="verifier le numero de votre telephone";

		return false;	
	}

    //tous les champs

    var tel=document.f.num.value; 
    var somme=document.f.somme.value;
     if((nom=="")||(prenom=="")||(mail=="")||(date=="")||(tel=="")||(cin=="")||(somme=="")) 
   {
	 document.getElementById("error").innerHTML="tous les champs doivent etre remplis"; 
	 return false;
   } 
else 
return true;
}