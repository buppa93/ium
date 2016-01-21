<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/attrak.css">
        <link rel="stylesheet" href="./css/small-device.css">
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
             <div class="row elmts">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">1.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">human </div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a1" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a1" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a1" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a1" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a1" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">technical</div>
             </div>
             <div class="row elmts">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">2.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">isolating</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a2" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a2" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a2" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a2" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a2" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">connective</div>
             </div>
             <div class="row elmts">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">3.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">pleasant</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a3" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a3" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a3" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a3" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a3" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">unpleasant</div>
             </div>
             <div class="row elmts">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">4.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">inventive</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a4" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a4" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a4" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a4" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a4" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">conventional</div>
             </div>
             <div class="row elmts">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">5.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">simple</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a5" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a5" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a5" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a5" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a5" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">complicated</div>
             </div>
             <div class="row elmts">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">6.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">professional</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a6" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a6" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a6" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a6" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a6" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">unprofessional</div>
             </div>
             <div class="row elmts">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">7.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">ugly</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a7" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a7" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a7" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a7" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a7" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">attractive</div>
             </div>
             <div class="row elmts">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">8.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">pratical</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a8" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a8" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a8" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a8" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a8" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">impratical</div>
             </div>
             <div class="row elmts">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">9.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">likeable</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a9" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a9" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a9" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a9" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a9" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color:lavender;">disagreeable</div>
             </div>
             <div class="row elmts">
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;">10.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">cumbersome</div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a10" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a10" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a10" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a10" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1" style="background-color:white;"><input type="radio" name="a10" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3" style="background-color: #ccffe6;">straightforward</div>
             </div>
              <div class="bttn-group col-lg-12">
                <input type="button" value="Undo" class="action-button btn btn-default">
                <!-- <input type="submit" value="Submit" class="action-button btn btn-default btn-success" onclick="next()"> -->
                <a href="attrak2.php" class="btn btn-primary action-button" onClick="storeData()">Next</a>
                </div>
    </body>

</html>
