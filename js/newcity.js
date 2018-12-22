function check(){
	var state=document.getElementById("state").value;
	if(state==""){
		alert("Please choose a state!");
		return false;
	}
	var city=document.getElementById("city").value;
	if(city.trim()==""){
		alert("Please input a city!");
		return false;
	}
	if(city.length>30){
		alert("City name is too long!");
		return false;
	}
	return true;
}



