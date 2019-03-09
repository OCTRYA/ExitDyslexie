<?php
include 'classes/controllers/ExitDyslexieController.php';
session_start();
require_once 'head.php';
require_once 'header.php';
?>


<div class="contactContainer">

<div class="form-sec">

<div class="row">
<div class="col-sm-6"> 
 <form name="qryform" id="qryform" method="post" action="mail.php" onsubmit="return(validate());" novalidate="novalidate">
   <h4>Contact form</h4>
      <div class="form-group">
      <label>Naam:</label>
      <input type="text" class="form-control" id="name" placeholder="Geef een naam in" name="name">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="name" placeholder="Geef een Emailadres in" name="email">
    </div>
    
    <div class="form-group">
      <label>Telefoon:</label>
      <input type="text" class="form-control" id="phone" placeholder="Geef een telefoonnummer in" name="phone">
    </div>
	<div class="form-group">
      <label>Onderwerp:</label>
      <input type="text" class="form-control" id="name" placeholder="Geef een onderwerp in" name="subject">
    </div>
	 
	<div class="form-group">
      <label>Omschrijving:</label>
      <textarea name="issues" class="form-control" id="iq" placeholder="Omschrijf uw suggestie, opmerking of probleem hier"></textarea>
    </div>
	
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div> 
  <div class="col-sm-6">
  </div>
  </div>
  </div>
  </div>
 <?php
    if(isset($_REQUEST['submit']))
    {       
        $exitDyslexieController = new ExitDyslexieController();
        $exitDyslexieController->drawDyslexieExercise($_POST['amountOfExercisesInput'],$_POST['amountOfLettersInput'],$_POST['difficultyOfExercisesInput']);
    }
    require_once 'bottom.php';
?>


</body>

</html>
