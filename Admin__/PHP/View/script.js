var b_nom = false; var b_prenom = false; var b_date_n = false;
var b_date_h = false; var b_email = false; var b_sexe = false;

function Controle(nom_controle)
{
	if( nom_controle == "Nom" )
	{
		if( document.getElementById(nom_controle).value == "" )
		{
			document.getElementById(nom_controle).style.border = "#CC3300 1px solid";
			b_nom = false;
		}
		else
		{
			document.getElementById(nom_controle).style.border ="1px solid #BEBEBE";
			b_nom = true;
		}
	}
	else if( nom_controle == "Prenom" )
	{
		if( document.getElementById(nom_controle).value == "" )
		{
			document.getElementById(nom_controle).style.border = "#CC3300 1px solid";
			b_prenom = false;
		}
		else
		{
			document.getElementById(nom_controle).style.border ="1px solid #BEBEBE";
			b_prenom = true;
		}
	}
	else if( nom_controle == "Date_n")
	{
		var date_ = new Date();
		var d = document.getElementById(nom_controle).value;
		var aaaa = Number(d.substr(0,4));
		var mm = Number(d.substr(5,2));
		var jj = Number(d.substr(8,2));
		var date = new Date(aaaa,mm-1,jj);
		if(!d)
		{
			document.getElementById(nom_controle).style.border = "#CC3300 1px solid";
			b_date_n = false;
		}
		else 
		{
			if (date_ < date)
			{
				document.getElementById(nom_controle).style.border = "#CC3300 1px solid";
				b_date_n = false;
			}
			else 
			{
				document.getElementById(nom_controle).style.border ="1px solid #BEBEBE";
				b_date_n = true;
			}
		}
	}
	else if( nom_controle == "Email")
	{
		var mail = document.getElementById(nom_controle).value;
		if( mail == "" )
		{
			document.getElementById(nom_controle).style.border = "#CC3300 1px solid";
			b_email = false;
		}
		else
		{
			if ( mail.indexOf('@') == -1 )
			{
				document.getElementById(nom_controle).style.border = "#CC3300 1px solid";
				b_email = false;
			}
			else
			{
				document.getElementById(nom_controle).style.border = "1px solid #BEBEBE";
				b_email = true;
			}
		}
	}
	else if( nom_controle == "Date_h" )
	{
		var date_ = new Date();
		var d = document.getElementById(nom_controle).value;
		var aaaa = Number(d.substr(0,4));
		var mm = Number(d.substr(5,2));
		var jj = Number(d.substr(8,2));
		var date = new Date(aaaa,mm-1,jj);
		if(!d)
		{
			document.getElementById(nom_controle).style.border = "#CC3300 1px solid";
			b_date_h = false;
		}
		else 
		{
			if (date_ < date)
			{
				document.getElementById(nom_controle).style.border = "#CC3300 1px solid";
				b_date_h = false;
			}
			else 
			{
				document.getElementById(nom_controle).style.border ="1px solid #BEBEBE";
				b_date_h = true;
			}
		}
	}
	else if( nom_controle == "Sexe_m" || nom_controle == "Sexe_f" )
	{
		b_sexe = true;
	}
}

function Valide()
{
	if( b_nom && b_prenom && b_date_h && b_date_n && b_email && b_sexe )
	{
		document.getElementById("form_").submit();
	}
	else
	{
		if( !b_nom )
		{
			document.getElementById("Nom").style.border = "#CC3300 1px solid";
		}
		if( !b_prenom )
		{
			document.getElementById("Prenom").style.border = "#CC3300 1px solid";
		}
		if( !b_date_n )
		{
			document.getElementById("Date_n").style.border = "#CC3300 1px solid";
		}
		if( !b_date_h )
		{
			document.getElementById("Date_h").style.border = "#CC3300 1px solid";
		}
		if( !b_email )
		{
			document.getElementById("Email").style.border = "#CC3300 1px solid";
		}
	}
}
