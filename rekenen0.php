<?php
    include 'classes/rebootSchool/rebootMath/ExerciseManager.php';
    include 'Template.php';
    require 'classes/rebootSchool/rebootMath/Addition.php';    
    session_start();
    require_once 'head.php';
    require_once 'header.php';
    $exerciseManager = null;
    
?>

<div class="container-fluid"> 
	<div class="col-sm-3 controleContainer">
		<div class="container-fluid">
			<div class="row" style="margin-top:5px">
			<form action="rekenen0.php" method="get" name="myForm">
				<div class="col-md-12">
					<input name="limitation" class="form-control form-control-lg" type="text" placeholder="Optellen tot ...">
					<input name="amountOfExercises" class="form-control form-control-lg" type="text" placeholder="Aantal nieuwe oefeningen">
				</div>
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary" style="float:right">Nieuwe reeks</button>
				</div>
			
				<div class="col-md-12 result">
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
        
        
        
        echo '<h2>Oefening optellen tot ' . $exerciseManager->getLimitation() .'</h2>';
    	echo '<div class="container">';
    	echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) .'">';
    	for($i =0; $i< $exerciseManager->getAmountOfExercises();$i++){
    	    echo '<div class="row" id="calculateExercise' . $i . '" ><div class="col-sm-2"><p style="float:right">&nbsp;&nbsp;' . $exerciseManager->getSingleExercises()[$i]->getFigure();
    	    echo " + ";
    	    echo $exerciseManager->getSingleExercises()[$i]->getSingleExercise()->getFigure();
    	    echo ' = </p></div><div class="col-sm-2">';
    	    echo '<input name="exercise'. $i .'" value="' . $exerciseManager->getSingleExercises()[$i]->getUserResult() .'" class="form-control form-control-lg" onkeypress="return isNumberKey(event)" type="text" autocomplete="off">';
    	    echo '</div><span>'.Template::showCorrectnessExercise($exerciseManager->getSingleExercises()[$i]->isResultCorrect()).'</span></div>';
    	}
    }else{
    
        $exerciseManager = new ExerciseManager();
        $_SESSION["exerciseManager"] = $exerciseManager;
        $exerciseManager->setAmountOfExercises($_GET["amountOfExercises"]);
        $exerciseManager->setLimitation($_GET["limitation"]);
        echo '<h2>Oefening optellen tot ' . $exerciseManager->getLimitation() . '</h2>';
    	echo '<div class="container">';
        echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) .'">';
        
        for($i =0; $i< $exerciseManager->getAmountOfExercises();$i++){
            $addition = new Addition();
            $addition->createRandomExercise($exerciseManager->getLimitation());
            $exerciseManager->addExercise($addition);
            echo '<div class="row" id="calculateExercise' . $i . '" ><div class="col-sm-2"><p style="float:right">' . $addition->getFigure();
            echo " + ";
            echo $addition->getSingleExercise()->getFigure();
            echo ' = </p></div><div class="col-sm-2">';
            echo '<input name="exercise'. $i .'"  class="form-control form-control-lg" onkeypress="return isNumberKey(event)" type="text" autocomplete="off">';
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
