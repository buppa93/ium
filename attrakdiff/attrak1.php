<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/attrak.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
            function next()
            {
                location.href = './attrak2.php';
            }
        </script>
        <script>
            function storeData()
            {
                if(typeof(Storage) !== "undefined")
                {
                    //if(tutti i campi sono riempiti)
                    var q1p1 = document.getElementsByName("a1").value;
                    sessionStorage.setItem("q1p1", q1p1);
                sessionStorage.setItem("q2p1", document.getElementsByName('a2').value);
                sessionStorage.setItem("q3p1", document.getElementsByName('a3').value);
                sessionStorage.setItem("q4p1", document.getElementsByName('a4').value);
                sessionStorage.setItem("q5p1", document.getElementsByName('a5').value);
                sessionStorage.setItem("q6p1", document.getElementsByName('a6').value);
                sessionStorage.setItem("q7p1", document.getElementsByName('a7').value);
                sessionStorage.setItem("q8p1", document.getElementsByName('a8').value);
                sessionStorage.setItem("q9p1", document.getElementsByName('a9').value);
                sessionStorage.setItem("q10p1", document.getElementsByName('a10').value);
                    sessionStorage.setItem("q11p1", document.getElementsByName('a1').checked);
                    //else
                    //code for empty fields
                }
                else
                {
                    alert("Sorry! No Web Storage support..");
                }
            }

            /*function savePage1()
            {
                sessionStorage.setItem("q1p1", document.getElementsByName("a1").value);
                sessionStorage.setItem("q2p1", document.getElementsByName("a2").value);
                sessionStorage.setItem("q3p1", document.getElementsByName("a3").value);
                sessionStorage.setItem("q4p1", document.getElementsByName("a4").value);
                sessionStorage.setItem("q5p1", document.getElementsByName("a5").value);
                sessionStorage.setItem("q6p1", document.getElementsByName("a6").value);
                sessionStorage.setItem("q7p1", document.getElementsByName("a7").value);
                sessionStorage.setItem("q8p1", document.getElementsByName("a8").value);
                sessionStorage.setItem("q9p1", document.getElementsByName("a9").value);
                sessionStorage.setItem("q10p1", document.getElementsByName("a10").value);
            }*/
        </script>
    </head>

    <body>
         <div class=" container container_attrak">
             <p>
                With the help of the word pairs please enter what you consider the most appropriate description for UTAssistant.
                <br><br>
                 Please click one item in every line.
                 <br><br>
             </p>
             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">human </div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a1" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a1" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a1" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a1" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a1" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">technical</div>
             </div>
             <div class="row">
                <div class="col-lg-3" style="background-color: #ccffe6;">isolating</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a2" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a2" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a2" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a2" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a2" value="5"></div>
                <div class="col-lg-3" style="background-color: #ccffe6;">connective</div>
             </div>
             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">pleasant</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a3" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a3" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a3" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a3" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a3" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">unpleasant</div>
             </div>
             <div class="row">
                <div class="col-lg-3" style="background-color: #ccffe6;">inventive</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a4" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a4" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a4" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a4" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a4" value="5"></div>
                <div class="col-lg-3" style="background-color: #ccffe6;">conventional</div>
             </div>
             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">simple</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a5" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a5" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a5" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a5" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a5" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">complicated</div>
             </div>
             <div class="row">
                <div class="col-lg-3" style="background-color: #ccffe6;">professional</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a6" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a6" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a6" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a6" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a6" value="5"></div>
                <div class="col-lg-3" style="background-color: #ccffe6;">unprofessional</div>
             </div>
             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">ugly</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a7" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a7" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a7" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a7" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a7" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">attractive</div>
             </div>
             <div class="row">
                <div class="col-lg-3" style="background-color: #ccffe6;">pratical</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a8" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a8" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a8" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a8" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a8" value="5"></div>
                <div class="col-lg-3" style="background-color: #ccffe6;">impratical</div>
             </div>
             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">likeable</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a9" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a9" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a9" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a9" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a9" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">disagreeable</div>
             </div>
             <div class="row">
                <div class="col-lg-3" style="background-color: #ccffe6;">cumbersome</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a10" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a10" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a10" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a10" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="a10" value="5"></div>
                <div class="col-lg-3" style="background-color: #ccffe6;">straightforward</div>
             </div>
        </div>
              <div class="bttn-group col-lg-12">
                <input type="button" value="Undo" class="action-button btn btn-default">
                <!-- <input type="submit" value="Submit" class="action-button btn btn-default btn-success" onclick="next()"> -->
                <a href="#" class="action-button btn btn-default btn-success" onClick="storeData()">Next</a>
                </div>
    </body>

</html>
