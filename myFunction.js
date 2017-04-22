
function myFunction()
{


    var x = document.forms["myForm"]["fname"];
    if (x.value == "")
     {
        alert("Name must be filled out");
        return false;
         }
    if (!allLetter(x)) 
	{
	alert("Name should be all characters!!");
	return false;
	}
	
   
    



    var x = document.forms["myForm"]["mname"];
    if (x.value == "") 
    	{
        alert("Name must be filled out");
        return false;
         }
    if (! allLetter(x)) {
	alert("Name should be all characters!!");
	 return false;
	}
	 
var x = document.forms["myForm"]["lname"];
    if (x.value == "") {
        alert("Name must be filled out");
        return false;
         }
    if (! allLetter(x)) {
		 alert("Name should be all characters!!");
		 return false;
	}


var t = document.forms["myForm"];
	if (!validateGender(t)) {
		alert ( "Select Gender: Male or Female" );
      return false;
	}

var x = document.forms["myForm"]["em"];

	if (x.value == "") 
	{
	alert("Email should not be blank !!");
	return false;
        }

	if (! ValidateEmail2(z)) 
	{
	alert('Please input valid Email ID!!!');
        return false;
	}


                
var x = document.forms["myForm"]["num"];
	if(x.value="")
	{
	alert("Contact Number should not be blank !!");
        return false;
	}
	if(allnumeric(x)){
		alert("Please enter numbers");
		return false;
	}
	
var x = document.forms["myForm"]["dept"];
	 if (!deptselect(x)) {
	 alert('Please select Department!!!');
      return false;
	}

var x = document.forms["myForm"]["yr"];
	if (!yearselect(x))
	{
		 alert('Please select Year!!!');
         return false;
	}

	
	  
	   
}

function allnumeric(inputtxt)
                {
                 var number = /^[0-9]+$/;
                 if(inputtxt.value.match(number))
                   {
              	     return true;
                   }
                 else
                   {
              	     return false;
                   }
                }
               
function allLetter(inputtxt)
                {
                 var letters = /^[A-Za-z]+$/;
                 if(inputtxt.value.match(letters))
                   {
              	     return true;
                   }
                 else
                   {
              	     return false;
                   }
                }           
                
function validateGender(inputText)
{
	if ( ( inputText.gen[0].checked == false ) && ( inputText.gen[1].checked == false ) )
	return false;
	else
	return true;
}               


function ValidateEmail2(inputText) 
{
	var valid = true;

	if (inputText.value.indexOf('@') == -1) 
	{
	return false;
	} 
	else 
	{
		var parts = inputText.value.split('@');
		var domain = parts[1];							
		if (domain.indexOf('.') == -1) 
		{
		return false;
		} 
		else 
		{
		var domainParts = domain.split('.');
		var ext = domainParts[1];
					
		}
	}
	return true;
}
     
function deptselect(yr)
			{
				if(yr.value == "aa")
					{
						return false;
					}
					else
					{
						return true;
					}
			}

function yearselect(dept)
			{
				if(dept.value == "se")
					{
						return false;
					}
					else
					{
						return true;
					}
			}




function manageFee()
			{
			
				var t = document.forms["myForm"];
				
				if (t.dmem[0].checked == true)
					{
						disableImem();
						t.amt.value="200";
					}
				if (t.dmem[1].checked == true)
					{
						disableImem();
						t.amt.value="300";
					}
				if (t.dmem[2].checked == true)
					{
						disableImem();
						t.amt.value="400";
					}
				if (t.dmem[3].checked == true)
					{
						enableImem();

						disableDmem();
						t.amt.value="";
					}
			

				
				
				if (t.imem[0].checked == true)
					{
						disableDmem();
						t.amt.value="1150";
					}
				if (t.imem[1].checked == true)
					{
						disableDmem();
						t.amt.value="2070";
					}
				if (t.imem[2].checked == true)
					{
						disableDmem();
						t.amt.value="2990";
					}
				if (t.imem[3].checked == true)
					{
						disableDmem();
						t.amt.value="15000";
					}
				if (t.imem[4].checked == true)
					{t.amt.value="";
						enableDmem();
						t.dmem[3].disabled=true;
						disableImem();
				
					}


			}             
function disableDmem()
{
	var t=document.forms["myForm"];
	t.dmem[0].disabled=true;
	t.dmem[1].disabled=true;
	t.dmem[2].disabled=true;
	t.dmem[3].disabled=true;
}

function disableImem()
{
	var t=document.forms["myForm"];
	t.imem[0].disabled=true;
	t.imem[1].disabled=true;
	t.imem[2].disabled=true;
	t.imem[3].disabled=true;
	t.imem[4].disabled=true;
}

function enableDmem()
{
	var t=document.forms["myForm"];
	t.dmem[0].disabled=false;
	t.dmem[1].disabled=false;
	t.dmem[2].disabled=false;
	t.dmem[3].disabled=false;
	t.dmem[4].disabled=false;

}

function enableImem()
{
var t=document.forms["myForm"];
	t.imem[0].disabled=false;
	t.imem[1].disabled=false;
	t.imem[2].disabled=false;
	t.imem[3].disabled=false;
	t.imem[4].disabled=false;
}