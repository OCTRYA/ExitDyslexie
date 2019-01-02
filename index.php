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
      -->
    <h2>Wiskunde</h2>
    <div class="col-sm-6 exerciseContainer">   
    <div class="row"> 	
    	<h3>Afzondelijke oefeningen</h3>
    	<h4>Optellen</h4>
        <ul>
    		<li><a href="rekenen0.php?limitation=10&amountOfExercises=10">Rekenen tot 10</a></li>
    		<li><a href="rekenen0.php?limitation=20&amountOfExercises=10">Rekenen tot 20</a></li>
    		<li>Rekenen tot <br/><form method="get" action="rekenen0.php?amountOfExercises=10"><input type="text" onkeypress="return isNumberKey(event)" name="limitation" autocomplete="off"/><input type="hidden" name="amountOfExercises" value="10" /><button type="submit" class="btn btn-primary">Start</button></form></li>
       	</ul>
       	<h4>Aftrekkingen</h4>
        <ul>
    		<li><a href="aftrekking0.php?limitation=10&amountOfExercises=10">Aftrekken tot 10</a></li>
    		<li><a href="aftrekking0.php?limitation=20&amountOfExercises=10">Aftrekken tot 20</a></li>
    		<li>Rekenen tot <br/><form method="get" action="aftrekking0.php?amountOfExercises=10"><input type="text" onkeypress="return isNumberKey(event)" name="limitation" autocomplete="off"/><input type="hidden" name="amountOfExercises" value="10" /><button type="submit" class="btn btn-primary">Start</button></form></li>
       	</ul>
		<h4>Tafels van Vermenigvuldiging</h4>
       	<ul>
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
   	   	
    </div>
    <div class="col-sm-6 exerciseContainer"> 
   	
    <h3>Traject</h3>
    <div>
    	<p>Een traject is een reeks oefeningen. De reeks houdt rekening met het niveau van de lerende en past de moeilijkheid van de oefeningen aan.</p>
    	<div id="startTrajectButton"><a href="trajectInfo1.php"><h1>Meer info</h1></a>
    	
    </div><p>Deze optie is nog niet operationeel en wordt verwacht tegen september 2019</p>
    </div>
</div>

<?php require_once 'bottom.php';?>
