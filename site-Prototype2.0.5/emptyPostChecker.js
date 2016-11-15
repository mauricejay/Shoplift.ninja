function empty()
{
	x = document.getElementById("input1").value;
	y = document.getElementById("input2").value;
	z = document.getElementById("input3").value;
	a = document.getElementById("input4").value;

	b1 = document.getElementById("p").checked;
	b2 = document.getElementById("l").checked;
	b3 = document.getElementById("b").checked;

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
		alert("price is empty!");
		return false;
	}
	else if (a == "") 
	{ 
		alert("description is empty!");
		return false;
	}
	if(!(b1 || b2 || b3))
	{
		alert("select a type!");
		return false;
	}
	else{
		return true;
	}
}
