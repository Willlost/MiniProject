function login(){
	window.location.href="login.html";
}
function logout(){
	window.location.href="logout.php";
}
function addpost(){
	window.location.href="addpost.html";
}
function preventDefault(){
	var t = document.getElementById("titlebox").value;
	var p = document.getElementById("postbox").value;
	if(t == "Title" || t == ""){
		document.getElementById("titlebox").style.backgroundColor = "red";
		document.getElementById("titlebox").style.color = "white";
		if (p == "write something here..." || p == ""){
			document.getElementById("postbox").style.backgroundColor = "red";
			document.getElementById("postbox").style.color = "white";
		}else{
		document.getElementById("postbox").style.backgroundColor = "white";
		document.getElementById("postbox").style.color = "black";
		}
		return false;
	}else{
		document.getElementById("titlebox").style.backgroundColor = "white";
		document.getElementById("titlebox").style.color = "black";
	}
	
	if (p == "write something here..." || p == ""){
		document.getElementById("postbox").style.backgroundColor = "red";
		document.getElementById("postbox").style.color = "white";
		return false;
	}else{
		document.getElementById("postbox").style.backgroundColor = "white";
		document.getElementById("postbox").style.color = "black";
	}
}
function getDate(){
	var d = new Date();
	return d;
}
function clearall(){
	var c = confirm("Are you sure?");
	if(c == true){
		document.getElementById("titlebox").value = '';
		document.getElementById("postbox").value = '';
	}
}