var phonemeArray;

$.ajax({
  url: 'data/phonemeArray/phonemeArray.csv',
  dataType: 'text',
}).done(successFunction);


$( function() {
    var handle = $( "#phonemeSlider-handle" );
    $( "#phonemeSlider" ).slider({
    range: "min",
      min: 0,
      max: getPhonemes().length-1,
    create: function() {
        handle.text( "i" );
      },
      slide: function( event, ui ) {
        handle.text( getPhonemes()[ui.value] );
        $("#phonemeSliderInfo").html(getPhonemeString(ui.value));
      }
    });
  } );
  
function successFunction(data){
	var allRows = data.split(/\r?\n|\r/);
	var teller=0;
	var json = '{"phonemes":[';

	var teller = 0;
	for (var singleRow = 0; singleRow < allRows.length; singleRow++) {
		var rowCells = allRows[singleRow].split(';');
		if(singleRow === 0){
			for (var rowCell = 0; rowCell < rowCells.length; rowCell++) {	
				if(rowCell === 0){
					json += '{"words":[{"p":"'+rowCells[rowCell]+'"}';
				}
				if(rowCell > 0 && rowCells[rowCell]!=""){
					json += ',{"p":"'+rowCells[rowCell]+'"}';
				}
			}
			json += ']}';
			teller +=1;
		}
		if(singleRow > 1){
			for (var rowCell = 0; rowCell < rowCells.length; rowCell++) {	
				if(rowCell === 0){
					json += ',{"words":[{"p":"'+rowCells[rowCell]+'"}';
				}
				if(rowCell > 0 && rowCells[rowCell]!=""){
					json += ',{"p":"'+rowCells[rowCell]+'"}';
				}
			}
			json += ']}';
			teller +=1;
		
		}
		
	
	
	}
	json += ']}';
	phonemeArray = JSON.parse(json);
}
  
  
function getPhonemes(){
var phonemes = [];
	for(var phon = 0; phon < phonemeArray.phonemes.length; phon++){
		phonemes.push(phonemeArray.phonemes[phon].words[0].p);
};
return phonemes;
}


function getPhonemeString(lev){
	var ph = getPhonemes();
	var phonemeString = "";
	var teller = 0;
	while(teller<= parseInt(lev)){
		phonemeString += ph[teller];
		if(teller <= parseInt(lev)-1){
			phonemeString += ", "
		}
		teller++
	}
	return phonemeString;
}








//BEGIN CHECKBOX
  $( function() {
    $( "input" ).checkboxradio();
    
  } );
  $("#radio-1").attr("checked",true);
//END  CHECKBOX









//BEGIN SPINNER AMOUNT OF EXERCISES
var MINSPINNER = 0;

$( function() {
    var spinner = $( "#spinner" ).spinner()
  } );
  
 //END SPINNER AMOUNT OF EXERCISES
 
 
//BEGIN Button make phoneme sequence
 $(function (){
 	$("#makePhonemeSequenceButton").click(function(){
 		
 

 	});
 });
 
 
 
 
 
 
 
 
 
 
 
