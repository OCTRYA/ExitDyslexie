<?php
    session_start();
    require_once 'head.php';
    require_once 'header.php';
?>


<div class="container-fluid">


    <div class="col-sm-6 controleContainer">
    	<h2>Dyslexie</H2>
    		<h3>Afzondelijke oefeningen</h3>
    
    		<h3>Traject</h3>
    </div>
    <div class="col-sm-6 exerciseContainer">
    	<h2>Wiskunde</h2>
    		<h3>Afzondelijke oefeningen</h3>
    <ul>
    		<li><a href="rekenen0.php?limitation=10&amountOfExercises=10">Rekenen tot 10</a></li>
    		<li><a href="rekenen0.php?limitation=20&amountOfExercises=10">Rekenen tot 20</a></li>
    		<li>Rekenen tot ...</li>
    		<li>Tafels van vermenigvuldiging</li>
    </ul>
    <h3>Traject</h3>
    </div>
</div>

<?php require_once 'bottom.php';?>
