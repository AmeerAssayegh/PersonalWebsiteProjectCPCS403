function fbValidate(){
    var errormessage = "";
    //Validate First Name
    if(document.getElementById("fname").value === ""){
        document.getElementById("fname").style.borderWidth="4px";
        document.getElementById("fname").style.borderColor="#ff006c";
		errormessage += "please Enter Your First Name !!\n";
		
	}
    //Validate Last Name
    if(document.getElementById("lname").value === ""){
        document.getElementById("lname").style.borderWidth="4px";
        document.getElementById("lname").style.borderColor="#ff006c";
		errormessage += "please Enter Your Last Name !!\n";
		
	}
    //Validate Email
    if(document.getElementById("email").value === ""){
        document.getElementById("email").style.borderWidth="4px";
        document.getElementById("email").style.borderColor="#ff006c";
		errormessage += "please Enter Your Email !!\n";
    }
    else if(document.getElementById("email").value.length > 0){
			var x = document.getElementById("email").value;
			var atpos = x.indexOf("@");
			var dotpos = x.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
					document.getElementById("email").style.borderWidth="4px";
                    document.getElementById("email").style.borderColor="#ff006c";
					alert("Not a valid e-mail address it should be like (example: abcd@dcba.com)");
					return false;
                }
    }
    
    //Validate Country
    if(document.getElementById("countryS").value == "Not Selected"){
        document.getElementById("countryS").style.borderWidth="4px";
        document.getElementById("countryS").style.borderColor="#ff006c";
		errormessage += "please select your Country !!\n";
	}
    
    //Validate Questions
    
    var radio11 = document.getElementById('Exce1').checked;
	var radio12 = document.getElementById('Average1').checked;
	var radio13 = document.getElementById('bad1').checked;
	
	if(radio11 === false && radio12 === false && radio13 === false){
        document.getElementById("Exce1").style.borderColor="#ff006c";
        document.getElementById("Average1").style.borderColor="#ff006c";
        document.getElementById("bad1").style.borderColor="#ff006c";
		errormessage += "please Answer first Question in Evaluation !!\n";
	}
    
    var radio11 = document.getElementById('Exce2').checked;
	var radio12 = document.getElementById('Average2').checked;
	var radio13 = document.getElementById('bad2').checked;
	
	if(radio11 === false && radio12 === false && radio13 === false){
        document.getElementById("Exce2").style.borderColor="#ff006c";
        document.getElementById("Average2").style.borderColor="#ff006c";
        document.getElementById("bad2").style.borderColor="#ff006c";
		errormessage += "please Answer Second Question in Evaluation !!\n";
	}
    
    
    //Validate Comments
    if(document.getElementById("comments").value === ""){
        document.getElementById("comments").style.borderWidth="4px";
        document.getElementById("comments").style.borderColor="#ff006c";
        errormessage += "please Write Comment or Sugesstion or write ( I don't have ) !!\n";
	
		
	}
    
    
    
    if (errormessage !== ""){
        alert(errormessage);
        return false;
    }
}

