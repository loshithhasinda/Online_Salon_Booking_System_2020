function enableButton(){
	if(document.getElementById("policy").checked){
		document.getElementById("btn1").disabled = false;
	}
	else{
		document.getElementById("btn1").disabled = true;
	}
}