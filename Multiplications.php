<?php
include 'classes/controllers/MultiplicationController.php';
?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
</head>
<body>
<!--  Header -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Exit Dyslexie</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- END HEADER -->

<div class="container-fluid">
 <div class="row">
 </div>  
 <div class="row">
 	<div class="col-md-9">
 		<p class="assignment"><span>
 			5 x 3
 		</span>
 		<span><input class="solution" type="text"/></span></p>
 		<p class="assignment"><span>
 			9 x 3
 		</span>
 		<span><input  class="solution" type="text"/></span></p>
 		<p class="assignment"><span>
 			2 x 3
 		</span>
 		<span><input  class="solution" type="text"/></span></p>
 	</div>
 	<div class="col-md-3">
     	<form name='form' method='post' action="#">
     	<table>
        <tr><td>Vermenigvuldiging</td><td>&nbsp; &nbsp;</td><td>Deling</td></tr>
        <tr><td>            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label" for="inlineCheckbox3">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
              <label class="form-check-label" for="inlineCheckbox4">4</label>
            </div>            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
              <label class="form-check-label" for="inlineCheckbox5">5</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
              <label class="form-check-label" for="inlineCheckbox6">6</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
              <label class="form-check-label" for="inlineCheckbox7">7</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
              <label class="form-check-label" for="inlineCheckbox8">8</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9">
              <label class="form-check-label" for="inlineCheckbox9">9</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">10</label>
            </div>
    	</td>
    	<td>&nbsp; &nbsp;</td>
        <td>
        	<div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label" for="inlineCheckbox3">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
              <label class="form-check-label" for="inlineCheckbox4">4</label>
            </div>            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
              <label class="form-check-label" for="inlineCheckbox5">5</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
              <label class="form-check-label" for="inlineCheckbox6">6</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
              <label class="form-check-label" for="inlineCheckbox7">7</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
              <label class="form-check-label" for="inlineCheckbox8">8</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9">
              <label class="form-check-label" for="inlineCheckbox9">9</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">10</label>
            </div>
        </td></tr>
        <tr><td>
        <div class="btn-group" data-toggle="buttons">
			<button type="button" class="btn btn-outline-success">Success</button>		
		</div>
        
        </td></tr>
        <tr><td><input type="submit" class="btn btn-primary" name="submitMath" value="Submit"> </td></tr>
        </table></form>
 	</div>
 
 </div>
 <div class="row">
 </div>
 <?php
    if(isset($_REQUEST['submitMath']))
    {       
        //$multiplicationController = new MultiplicationController();
        //$multiplicationController->drawMultiplicationExcersise($_POST['amountOfExercisesInput'],$_POST['heighestSumInput']);
    }
?>

</div>

</body>

</html>
