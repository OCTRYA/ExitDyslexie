<?php
include 'classes/controllers/ExitDyslexieController.php';
?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>    
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"/>

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
 	<div class="col-lg-6">
     	<form name='form' method='post' action="#">
     	<table>
        <tr><td>Geef het aantal oefeningen: </td><td><input type="text" name="amountOfExercisesInput" id="amountOfExercisesInput"/></td></tr>
        <tr><td>Geef het aantal letter in (2-26): </td><td><input type="text" name="amountOfLettersInput" id="amountOfLettersInput"/></td></tr>
        <tr><td>Geef de moeilijkheidsgraad in (1-5): </td><td><input type="text" name="difficultyOfExercisesInput" id="difficultyOfExercisesInput"/></td></tr>
        <tr><td><input type="submit" class="btn btn-primary" name="submit" value="Submit"> </td></tr>
        </table></form>
 	</div>
 
 </div>
 <?php
    if(isset($_REQUEST['submit']))
    {       
        $exitDyslexieController = new ExitDyslexieController();
        $exitDyslexieController->drawDyslexieExercise($_POST['amountOfExercisesInput'],$_POST['amountOfLettersInput'],$_POST['difficultyOfExercisesInput']);
    }
?>

</div>

</body>

</html>
