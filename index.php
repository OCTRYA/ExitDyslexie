
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="screen" />
    	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
</head>
<body>
<!--  Header -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- END HEADER -->

<div>
   
<h1>Hello, world!</h1>
<form name='form' method='post' action="classes/controllers/ExitDyslexieController.php">
Geef het aantal oefeningen: <input type="text" name="amountOfExercisesInput" id="amountOfExercisesInput"/>
Geef het aantal letter in (2-26): <input type="text" name="amountOfLettersInput" id="amountOfLettersInput"/>
Geef de moeilijkheidsgraad in (1-5): <input type="text" name="difficultyOfExercisesInput" id="difficultyOfExercisesInput"/>
<input type="submit" name="submit" value="Submit"> 
</form>
</div>
<?php
    include 'classes/controllers/templateController.php';
    $view = new View();
?>


<?php $view->getBottom()?>

</body>

</html>
