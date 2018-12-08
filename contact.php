<?php
include 'classes/controllers/ExitDyslexieController.php';
?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- END HEADER -->

<div class="container contactContainer">

<div class="form-sec">
  <h4>Contact form</h4>
  
 <form name="qryform" id="qryform" method="post" action="mail.php" onsubmit="return(validate());" novalidate="novalidate">
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
?>

</div>

</body>

</html>
