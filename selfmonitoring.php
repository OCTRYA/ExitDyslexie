<?php
    session_start();
    require_once 'head.php';
    require_once 'header.php';
?>

<link rel="stylesheet" href="css/selfmonitoringtool/css.css"/>
    <script type="text/javascript" src="js/jsPDF/dist/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.0.16/jspdf.plugin.autotable.js"></script>
<div class="container-fluid background">

    <h2>Zelfmonitoringtool</h2>
    <p class="toolInformation"> Selecteer hieronder de elementen die je wil gebruiken om een zelfevaluatieformulier voor een leerling te maken. Indien u de voor u gepaste elementen niet terugvindt dan kan u steeds zelf uw eigen suggesties toevoegen</p>
   
    <div class="dropdown row">
          <button class="dropbtn">Selecteer een checklist</button>
          <div id="selfMonitoringCategoryMenu"class="dropdown-content">
          </div>
	</div>
	<div class="row">
		<div id="selfMonitorElementGroup" ondrop="dropElement(event)" ondragover="allowDropElement(event)" class="col-sm-3">
			
		</div>
		<div class="col-sm-1" style="height:400px; background-image:url('images/pijlen_klein.png')">
		
		</div>
		<div id="selfMonitorElementSelectionGroup" ondrop="dropElement(event)" ondragover="allowDropElement(event)" class="col-sm-4">
		
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
    		<button id="makeSelfMonitoringDocument" type="button" class="btn btn-success">Maak document</button>
		</div>
		<div class="col-sm-1">
		</div>
		<div class="col-sm-4">
    		<button style="float:right" type="button" data-toggle="modal" data-target="#newElementModal" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button>
		</div>
	</div>
</div>

    
</div>
<!-- Modal new element -->
<div class="modal fade" id="newElementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Maak een eigen zelfmonitoringelement</label>
            <textarea class="form-control" id="newSelfMonitoringElementTextarea1" rows="3"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="makePersonalSelfMonitoringElement" class="btn btn-success">Voeg toe</button>
      </div>
    </div>
  </div>
</div>


  <script src="js/selfmonitoringtool/selfmonitoringtool.js"></script>  




<?php require_once 'bottom.php';?>
