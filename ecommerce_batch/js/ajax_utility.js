var xmlhttp = false;
//Check if we are using IE.
try {
//If the Javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer.");
} catch (e) {
//If not, then use the older active x object.
try {
//If we are using Internet Explorer.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
} catch (E) {
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//If we are using a non-IE browser, create a javascript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
}

function makerequest(email_address,objID)
 {
	//var given_text = document.getElementById('given_text').value;
        //alert(email_address);
        if(email_address)
            {
        serverPage='http://localhost/ecommerce_batch10/checkout/verified_email/'+email_address;
	//alert(serverPage);
        xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			document.getElementById(objID).innerHTML = xmlhttp.responseText;
			var text = xmlhttp.responseText;
                        //alert(text);
                        if(text=='Alredy Registured')
                            {
                                document.getElementById('sbutton').disabled=true;
                            }
                        if(text=='Avilable')
                            {
                                document.getElementById('sbutton').disabled=false;
                            }
		 }
	}
      }
xmlhttp.send(null);
}
