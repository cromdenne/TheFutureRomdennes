function validate() {
	var x=document.forms["myForm"]["home"].value;
	if (x=="Wisconsin" || x=="wisconsin" || x=="University of Wisconsin"
		|| x=="university of wisconsin" || x=="Wisconsin Badgers" || 
		x=="wisconsin badgers" || x=="UW" || x=="uw" || x=="badgers" 
		|| x=="Badgers" || x=="BADGERS") {

		var y=document.forms["myForm"]["away"].value;
		if (y=="Marquette" || y=="marquette" || y=="Marquette University" 
			|| y=="marquette university" || y=="Golden Eagles" || y=="golden eagles" 
			|| y=="GOLDEN EAGLES" || y=="MU" || y=="mu") {
			this.location.href="thedayforeverarrived.php";
		}
	}
	else {
		document.getElementById('wrong').innerHTML="Oops, not quite...";
	  	document.getElementById('hint').style.display="block";
	}
}
