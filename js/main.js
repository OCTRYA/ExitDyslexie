/**
 * 
 */

$(document).ready(init());


function init(){
	$('#checkAnwersRekenen0').bind( "click", checkAnwersRekenen0);
}

function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return false;
				return true;
			} 
			
function checkAnwersRekenen0(){
	
}

			

