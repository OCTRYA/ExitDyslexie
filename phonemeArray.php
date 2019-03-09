<?php
    session_start();
    require_once 'head.php';
    require_once 'header.php';
?>

<link rel="stylesheet" href="css/phonemeArray/phonemeArray.css"/>
<script type="text/javascript" src="js/jsPDF/dist/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.0.16/jspdf.plugin.autotable.js"></script>

<div class="container-fluid background">

    <h2>Foneemreeks</h2>
    <p class="toolInformation"> Selecteer via de schuifbalk de phonemen die je wil inoefenen.</p>
   
    
	<div class="row">
		<div class="col-sm-12">
			<span>{</span><span><span id="phonemeSliderInfo">i</span></span><span>}</span>
			<div id="phonemeSlider">
			<div id="phonemeSlider-handle" class="ui-slider-handle"></div>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
    		<fieldset>
                <legend>Willekeurige  verdelen van de klanken</legend>
                <label class="checkboxButton" for="radio-1">Ja</label>
                <input type="radio" name="radio-1" id="radio-1" >
                <label class="checkboxButton" for="radio-2">Nee</label>
                <input type="radio" name="radio-1" id="radio-2">
      			<legend>Aantal oefeningen</legend>
				<p>
                  <label for="spinner">Select a value:</label>
                  <input id="spinner" name="valueSpinner" value="10">
                </p>
             	<button id="makePhonemeSequenceButton" class="btn btn-success">Maak de foneemreeks</button>    
             </fieldset>
      	</div>
 		
	</div>
</div>

    


  <script src="js/phonemeArray/phonemeArray.js"></script>  



<?php require_once 'bottom.php';?>
