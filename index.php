<?php
    session_start();
    require_once 'head.php';
    require_once 'header.php';
?>


<div class="container-fluid">


    <!--<div class="col-sm-6 controleContainer">
    	<h2>Dyslexie</H2>
    		<h3>Afzondelijke oefeningen</h3>
    
    		<h3>Traject</h3>
    </div>  -->
    <div class="col-sm-6 exerciseContainer">
    	<h2>Wiskunde</h2>
    		<h3>Afzondelijke oefeningen</h3>
    <ul>
    		<li><a href="rekenen0.php?limitation=10&amountOfExercises=10">Rekenen tot 10</a></li>
    		<li><a href="rekenen0.php?limitation=20&amountOfExercises=10">Rekenen tot 20</a></li>
    		<li>Rekenen tot <br/><form method="get" action="rekenen0.php?amountOfExercises=10"><input type="text" onkeypress="return isNumberKey(event)" name="limitation"/><input type="hidden" name="amountOfExercises" value="10" /><button type="submit" class="btn btn-primary">Start</button></form></li>
   	</ul>
   	<div class="row">
   		<div class="col-sm-5">
       		<ul>
       			<li>Tafels van vermenigvuldiging in volgorde</li>
        		<li><a href="multiplication0.php?limitation=2&amountOfExercises=10">Tafel van 2</a></li>
        		<li><a href="multiplication0.php?limitation=3&amountOfExercises=10">Tafel van 3</a></li>
        		<li><a href="multiplication0.php?limitation=4&amountOfExercises=10">Tafel van 4</a></li>
        		<li><a href="multiplication0.php?limitation=5&amountOfExercises=10">Tafel van 5</a></li>
        		<li><a href="multiplication0.php?limitation=6&amountOfExercises=10">Tafel van 6</a></li>
        		<li><a href="multiplication0.php?limitation=7&amountOfExercises=10">Tafel van 7</a></li>
        		<li><a href="multiplication0.php?limitation=8&amountOfExercises=10">Tafel van 8</a></li>
        		<li><a href="multiplication0.php?limitation=9&amountOfExercises=10">Tafel van 9</a></li>
        		<li><a href="multiplication0.php?limitation=10&amountOfExercises=10">Tafel van 10</a></li>
        		
        		
        	</ul>
    	</div>
    	<div class="col-sm-5">
       		
    	</div>
   	</div>
    <h3>Traject</h3>
    </div>
</div>

<?php require_once 'bottom.php';?>
