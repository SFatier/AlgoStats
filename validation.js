//validation du nombre d'element
function valider()
{
	try {
		var e = document.getElementById("valider");
	    var rst = e.options[e.selectedIndex].value;
	    alert(rst);
	}catch(e){
		console.log("nine")
	}
}
