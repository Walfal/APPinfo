<?php
    $prenom=$_POST["prenom"];
    $op1=$_POST["op1"];
    $op2=$_POST["op2"];
    $op3=$_POST["op3"];
    $unite=$_POST["unite"];
    $dizaine=$_POST["dizaine"];
    $centaine=$_POST["centaine"];
    $score = 0;

        if($prenom == ""){ // si les saisies ne sont pas vides
            echo "<p style='color = red;'>N'oublie pas d'écrire ton prénom</p>";
            header("Location: http://localhost:8000/DSJSPHP/%3Cbr?prenom=&op1=&op2=&op3=&centaine=&dizaine=&unite="); 
            exit();
        }

        if($op1 == 13){
            "score: ".$score += 1;
        }

        if($op2 == 18){
            $score += 1;
        }

        if($op3 == 20){
            $score += 1;
        }

        if($centaine == 8){
            $score += 1;
        }

        if($unite == 9){
            $score += 1;
        }

        if($dizaine == 2){
            $score += 1;
        }

        echo $score;

        if($score < 6){
            header("Location: http://localhost:8000/DSJSPHP/%3Cbr?prenom=&op1=&op2=&op3=&centaine=&dizaine=&unite="); 
            
        }else{
            sleep(4);
            header("Location: http://localhost:8000/DSJSPHP/bravo.php"); 
        }

       



        
        
        $servername = "localhost";
        $username = "admin";
        $password = "";
        
        try {
          $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }

        
        ?> 