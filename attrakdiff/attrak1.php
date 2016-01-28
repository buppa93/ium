<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/attrak.css">
        <link rel="stylesheet" href="./css/small-device.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       <script>/*
            function next()
            {
                location.href = './attrak2.php';
            }*/
        </script>
        <script>
            function storeData()
            {
                if((((document.getElementById("a1")==true)||(document.getElementById("b1")==true)||(document.getElementById("c1")==true)||(document.getElementById("d1")==true)||(document.getElementById("e1")==true))&&((document.getElementById("a2")==true)||(document.getElementById("b2")==true)||(document.getElementById("c2")==true)||(document.getElementById("d2")==true)||(document.getElementById("e2")==true))&&((document.getElementById("a3")==true)||(document.getElementById("b3")==true)||(document.getElementById("c3")==true)||(document.getElementById("d3")==true)||(document.getElementById("e3")==true))&&((document.getElementById("a4")==true)||(document.getElementById("b4")==true)||(document.getElementById("c4")==true)||(document.getElementById("d4")==true)||(document.getElementById("e4")==true))&&((document.getElementById("a5")==true)||(document.getElementById("b5")==true)||(document.getElementById("c5")==true)||(document.getElementById("d5")==true)||(document.getElementById("e5")==true))&&((document.getElementById("a6")==true)||(document.getElementById("b6")==true)||(document.getElementById("c6")==true)||(document.getElementById("d6")==true)||(document.getElementById("e6")==true))&&((document.getElementById("a7")==true)||(document.getElementById("b7")==true)||(document.getElementById("c7")==true)||(document.getElementById("d7")==true)||(document.getElementById("e7")==true))&&((document.getElementById("a8")==true)||(document.getElementById("b8")==true)||(document.getElementById("c8")==true)||(document.getElementById("d8")==true)||(document.getElementById("e8")==true))&&((document.getElementById("a9")==true)||(document.getElementById("b9")==true)||(document.getElementById("c9")==true)||(document.getElementById("d9")==true)||(document.getElementById("e9")==true))&&((document.getElementById("a10")==true)||(document.getElementById("b10")==true)||(document.getElementById("c10")==true)||(document.getElementById("d10")==true)||(document.getElementById("e10")==true)))==true)
                {
                var storeBox = {};
                storeBox['q1p1'] = $('input[name=a1]:checked').val();
                storeBox['q2p1'] = $('input[name=a2]:checked').val();
                storeBox['q3p1'] = $('input[name=a3]:checked').val();
                storeBox['q4p1'] = $('input[name=a4]:checked').val();
                storeBox['q5p1'] = $('input[name=a5]:checked').val();
                storeBox['q6p1'] = $('input[name=a6]:checked').val();
                storeBox['q7p1'] = $('input[name=a7]:checked').val();
                storeBox['q8p1'] = $('input[name=a8]:checked').val();
                storeBox['q9p1'] = $('input[name=a9]:checked').val();
                storeBox['q10p1'] = $('input[name=a10]:checked').val();
                sessionStorage.setItem('storeBoxpage1', JSON.stringify(storeBox));
                console.log(storeBox);
                 location.href = './attrak2.php';

                }  else alert("Non hai Cliccato tutti i campi!");
            }
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
             <script>
             radioObject.checked=false;
             </script>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">1.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">human </div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="a1" name="a1" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="b1" name="a1" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="c1" name="a1" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="d1" name="a1" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="e1" name="a1" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">technical</div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">2.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">isolating</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="a2" name="a2" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="b2" name="a2" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="c2" name="a2" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="d2" name="a2" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="e2" name="a2" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">connective</div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">3.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">pleasant</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="a3" name="a3" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="b3" name="a3" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="c3" name="a3" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="d3" name="a3" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="e3" name="a3" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">unpleasant</div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">4.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">inventive</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="a4" name="a4" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="b4" name="a4" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="c4" name="a4" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="d4" name="a4" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="e4" name="a4" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">conventional</div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">5.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">simple</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="a5" name="a5" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="b5" name="a5" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="c5" name="a5" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="d5" name="a5" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="e5" name="a5" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">complicated</div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">6.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">professional</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="a6" name="a6" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="b6" name="a6" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="c6" name="a6" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="d6" name="a6" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="e6" name="a6" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">unprofessional</div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">7.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">ugly</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="a7" name="a7" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="b7" name="a7" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="c7" name="a7" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="d7" name="a7" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="e7" name="a7" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">attractive</div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">8.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">pratical</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="a8" name="a8" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="b8" name="a8" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="c8" name="a8" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="d8" name="a8" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="e8" name="a8" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">impratical</div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">9.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">likeable</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="a9" name="a9" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="b9" name="a9" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="c9" name="a9" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="d9" name="a9" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="e9" name="a9" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">disagreeable</div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">10.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">cumbersome</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="a10" name="a10" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="b10" name="a10" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="c10" name="a10" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="d10" name="a10" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" id="e10" name="a10" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">straightforward</div>
             </div>
              <div class="bttn-group col-lg-12">
                <input type="button" value="Undo" class="action-button btn btn-default">
                <!-- <input type="submit" value="Submit" class="action-button btn btn-default btn-success" onclick="next()"> -->
                <a href="#" class="action-button btn btn-default btn-success" onClick="storeData()">Next</a>
                </div>

    </body>

</html>
