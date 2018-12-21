<?php
include 'classes/controllers/ExitDyslexieController.php';
session_start();
require_once 'head.php';
require_once 'header.php';
?>


<div class="container">

<div class="form-sec">

  
 <form name="qryform" id="qryform" method="post" action="mail.php" onsubmit="return(validate());" novalidate="novalidate">
   <h4>Contact form</h4>
      <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
    </div>
    
    <div class="form-group">
      <label>Phone No.:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
    </div>
	<div class="form-group">
      <label>Subject:</label>
      <input type="text" class="form-control" id="name" placeholder="Subject" name="subject">
    </div>
	 
	<div class="form-group">
      <label>Issues/query:</label>
      <textarea name="issues" class="form-control" id="iq" placeholder="Enter your Issues/query"></textarea>
    </div>
	
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
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
