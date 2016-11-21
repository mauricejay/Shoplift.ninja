function empty()
{
	var x, y, z;
	x = document.getElementById("input1").value;
	y = document.getElementById("input2").value;
	z = document.getElementById("input3").value;
	if (x == "") 
	{ 
		alert("title is empty!");
		return false;
	}
	else if (y == "") 
	{ 
		alert("url is empty!");
		return false;
	}
	else if (z == "") 
	{ 
		alert("description is empty!");
		return false;
	}
	else{
		return true;
	}
}