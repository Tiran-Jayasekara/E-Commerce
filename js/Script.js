function ffname() 
{
	var e = document.getElementById('fname').value;
	var x = document.getElementById('vfname');
	if (e=="") 
	{
		x.style.visibility="visible";
	}
	else
	{
		x.style.visibility="hidden";
	}
}

function flname() 
{
	var e = document.getElementById('lname').value;
	var x = document.getElementById('vlname');
	if (e=="") 
	{
		x.style.visibility="visible";
	}
	else
	{
		x.style.visibility="hidden";
	}
}

function femail() 
{
	var e = document.getElementById('email').value;
	var x = document.getElementById('vemail');
	regx=/[a-z 0-9]@[a-z]+.+com+/;
	if (!regx.test(e)) 
	{
		x.style.visibility="visible";
	}
	else
	{
		x.style.visibility="hidden";
	}
}

function fphone() 
{
	var f = document.getElementById('phone').value;
	var x = document.getElementById('vphone');
	regx=/^[0][7][0125678][0-9]{7}$/;
	if (!regx.test(f)) 
	{
		x.style.visibility="visible";
	}
	else
	{
		x.style.visibility="hidden";
	}
}

function faddress() 
{
	var e = document.getElementById('address').value;
	var x = document.getElementById('vaddress');
	if (e=="") 
	{
		x.style.visibility="visible";
	}
	else
	{
		x.style.visibility="hidden";
	}
}

function fcountry() 
{
	var e = document.getElementById('billing_country').value;
	var x = document.getElementById('vcountry');
	if (e=="n") 
	{
		x.style.visibility="visible";
	}
	else
	{
		x.style.visibility="hidden";
	}
}

function fusername() 
{
	var e = document.getElementById('UserName').value;
	var x = document.getElementById('vusername');
	if (e=="") 
	{
		x.style.visibility="visible";
	}
	else
	{
		x.style.visibility="hidden";
	}
}

function fpassword() 
{
	var e = document.getElementById('password').value;
	var x = document.getElementById('vapassword');
	if (e.length<8) 
	{
		x.style.visibility="visible";
	}
	else
	{
		x.style.visibility="hidden";
	}
}

function fpayment() 
{
	var a = document.getElementById('Credit/Debit Card Code').value;
	var b = document.getElementById('paypal_code').value;
	var c = document.getElementById('coupon_code').value;
	var x = document.getElementById('vpmethod');
	if (a==""&&b==""&&c=="") 
	{
		x.style.visibility="visible";
	}
	else
	{
		x.style.visibility="hidden";
	}
}

function fcpassword() 
{
	var e = document.getElementById('password').value;
	var l = document.getElementById('cpassword').value;
	var x = document.getElementById('vacpassword');
	if (e!=l) 
	{
		x.style.visibility="visible";
	}
	else
	{
		x.style.visibility="hidden";
	}
}


