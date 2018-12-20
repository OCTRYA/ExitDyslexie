<?php
    include 'classes/rebootSchool/rebootMath/ExerciseManager.php';
    include 'Template.php';
    require 'classes/rebootSchool/rebootMath/Multiplication.php';    
    session_start();
    require_once 'head.php';
    require_once 'header.php';
    $exerciseManager = null;
    
?>

<div class="container-fluid"> 
	<div class="col-sm-3 controleContainer">
		<div class="container-fluid">
			<div class="row" style="margin-top:5px">
			<form action="multiplication0.php" method="get" name="myForm">
				<div class="col-md-12">
					<input name="limitation" class="form-control form-control-lg" type="text" placeholder="Vermenigvuldig tot ...">
					<input name="amountOfExercises" class="form-control form-control-lg" type="text" placeholder="Aantal nieuwe oefeningen">
				</div>
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary" style="float:right">Nieuwe reeks</button>
				</div>
			</form>
			</div>
		</div>
	</div>
<div class="col-sm-9 exerciseContainer">
    	
<?php
    if(isset($_SESSION["exerciseManager"])&& isset($_POST['submitRekenen0'])){
        $exerciseManager = $_SESSION["exerciseManager"];
        for($i =0; $i< $exerciseManager->getAmountOfExercises();$i++){
            $exerciseManager->getSingleExercises()[$i]->setUserResult($_POST['exercise'.$i]);
        }
        
        
        
        echo '<h2>De tafel van vermenigvuldiging van ' . $exerciseManager->getLimitation() .'</h2>';
    	echo '<div class="container">';
    	echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) .'">';
    	for($i =0; $i< $exerciseManager->getAmountOfExercises();$i++){
    	    echo '<div class="row" id="calculateExercise' . $i . '" ><div class="col-sm-2"><p style="float:right">&nbsp;&nbsp;' . $exerciseManager->getSingleExercises()[$i]->getFigure();
    	    echo " x ";
    	    echo $exerciseManager->getSingleExercises()[$i]->getSingleExercise()->getFigure();
    	    echo ' = </p></div><div class="col-sm-2">';
    	    echo '<input name="exercise'. $i .'" value="' . $exerciseManager->getSingleExercises()[$i]->getUserResult() .'" class="form-control form-control-lg" onkeypress="return isNumberKey(event)" type="text">';
    	    echo '</div><span>'.Template::showCorrectnessExercise($exerciseManager->getSingleExercises()[$i]->isResultCorrect()).'</span></div>';
    	}
    }else{
    
        $exerciseManager = new ExerciseManager();
        $_SESSION["exerciseManager"] = $exerciseManager;
        $exerciseManager->setAmountOfExercises($_GET["amountOfExercises"]);
        $exerciseManager->setLimitation($_GET["limitation"]);
        echo '<h2>De tafel van vermenigvuldiging van ' . $exerciseManager->getLimitation() . '</h2>';
    	echo '<div class="container">';
        echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) .'">';
        
        for($i =0; $i< $exerciseManager->getAmountOfExercises();$i++){
            $multiplication = new Multiplication();
            $multiplication->createSimpleExercise($exerciseManager->getLimitation(),$i+1);
            $exerciseManager->addExercise($multiplication);
            echo '<div class="row" id="calculateExercise' . $i . '" ><div class="col-sm-2"><p style="float:right">' . $multiplication->getFigure();
            echo " x ";
            echo $multiplication->getSingleExercise()->getFigure();
            echo ' = </p></div><div class="col-sm-2">';
            echo '<input name="exercise'. $i .'"  class="form-control form-control-lg" onkeypress="return isNumberKey(event)" type="text">';
            echo '</div></div>';
            $_POST['update'] = 'true';
        }
        
        
        
    }
    echo '<button id="checkAnwersRekenen0" name="submitRekenen0" value="true" type="submit" class="btn btn-primary">KLAAR</button>
    		    		<script src="js/main.js"></script>';
    echo '</form>';
    

    


?>


    		
    	</div>
    </div>



<?php
require_once 'bottom.php';
?>
