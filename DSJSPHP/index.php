<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Evaluations maths CE1</title> 
    </head>
    <body>
        <section class="quiz">
            <form action = "traitement.php" method="POST" id="myform">
                <label for="prenom">Prénom : </label><br>
                <input type="text" id="prenom" name="prenom" ><br><br>
                <?php 
                    $prenom = $_GET["prenom"];
                    if($prenom == ""){ // si les saisies ne sont pas vides
                        echo "<p style='color = red;'>N'oublie pas d'écrire ton prénom</p>";
                    }
                ?>
            
                <fieldset>
                Calcul mental :</br>
                10 + 3 = <input class="operation" type="text" id="op1" name="op1"><br>
                9 + 9 = <input class="operation" type="text" id="op2" name="op2"><br>
                7 + 13 = <input class="operation" type="text" id="op3" name="op3"><br>
                
                </fieldset><br><br>
                <fieldset>
                829 est un nombre avec 
                <select class="operation" name="centaine">
                    <option value=""> -</option>
                    <option value="1"> 1</option>
                    <option value="2"> 2</option>
                    <option value="3"> 3</option>
                    <option value="4"> 4</option>
                    <option value="5"> 5</option>
                    <option value="6"> 6</option>
                    <option value="7"> 7</option>
                    <option value="8"> 8</option>
                    <option value="9"> 9</option>
                </select> centaines +
                <select class="operation" name="dizaine">
                    <option value=""> -</option>
                    <option value="1"> 1</option>
                    <option value="2"> 2</option>
                    <option value="3"> 3</option>
                    <option value="4"> 4</option>
                    <option value="5"> 5</option>
                    <option value="6"> 6</option>
                    <option value="7"> 7</option>
                    <option value="8"> 8</option>
                    <option value="9"> 9</option>
                </select> dizaines + 
                <select class="operation" name="unite">
                    <option value=""> -</option>
                    <option value="1"> 1</option>
                    <option value="2"> 2</option>
                    <option value="3"> 3</option>
                    <option value="4"> 4</option>
                    <option value="5"> 5</option>
                    <option value="6"> 6</option>
                    <option value="7"> 7</option>
                    <option value="8"> 8</option>
                    <option value="9"> 9</option>
                </select> unités <br><br>
                
                </fieldset><br><br>
                <input onclick="show()" id="verifier" type="submit" value="Vérifier">
             
                <input type="reset" value="effacer les réponses">
                
                </form>

                <script>
                    function show(){
                        var val = confirm("Voulez-vous soumettre votre formulaire ?");
                       if(val == false){
                          document.location.reload();
                       }
                    }




                </script>
            </section>
        </body>
        </html>