<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/attrak.css"/>
        <link rel="stylesheet" href="./css/small-device.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
            function storeData()
            {
                if(($('input[name=c1]:checked').length<=0)|| ($('input[name=c2]:checked').length<=0) || ($('input[name=c3]:checked').length<=0) || ($('input[name=c4]:checked').length<=0) || ($('input[name=c5]:checked').length<=0) || ($('input[name=c6]:checked').length<=0) || ($('input[name=c7]:checked').length<=0) || ($('input[name=c8]:checked').length<=0) || ($('input[name=c9]:checked').length<=0))
                    {
                        alert("WARNING! Please check all items.")
                    } else
                        {

                var storeBox = {};
                storeBox['q1p3'] = $('input[name=c1]:checked').val();
                storeBox['q2p3'] = $('input[name=c2]:checked').val();
                storeBox['q3p3'] = $('input[name=c3]:checked').val();
                storeBox['q4p3'] = $('input[name=c4]:checked').val();
                storeBox['q5p3'] = $('input[name=c5]:checked').val();
                storeBox['q6p3'] = $('input[name=c6]:checked').val();
                storeBox['q7p3'] = $('input[name=c7]:checked').val();
                storeBox['q8p3'] = $('input[name=c8]:checked').val();
                storeBox['q9p3'] = $('input[name=c9]:checked').val();
                sessionStorage.setItem('storeBoxpage3', JSON.stringify(storeBox));
                console.log(storeBox);
                location.href="attrak4.php";
                        }
            }
        </script>
        <link rel="stylesheet" href="./css/table-style.css">
        <link rel="stylesheet" href="./css/test.css">
        <link rel="stylesheet" href="./css/attrak.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>

    <body>
         <div class="container container_attrak">
             <p>
                With the help of the word pairs please enter what you consider the most appropriate description for UTAssistant.
                 <br><br>
                 Please click one item in every line.
                 <br><br>

             </p>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">1.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">confusing</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c1" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c1" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c1" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c1" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c1" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">clearly structured</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">2.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">repelling</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c2" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c2" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c2" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c2" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c2" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">appealing</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">3.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">bold</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c3" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c3" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c3" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c3" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c3" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">cautious</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">4.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">innovative</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c4" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c4" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c4" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c4" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c4" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">conservative</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">5.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">dull </div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c5" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c5" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c5" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c5" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c5" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">captivating</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">6.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">undemanding</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c6" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c6" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c6" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c6" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c6" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">challenging</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">7.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">motivating</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c7" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c7" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c7" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c7" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c7" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">discouraging</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">8.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">novel</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c8" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c8" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c8" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c8" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c8" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">ordinary</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">9.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">unruly</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c9" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c9" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c9" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c9" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="c9" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">manageable</div>
             </div>
             <div class="row">
                 <div class="bttn-group col-lg-12">
                     <a href="attrak2.php" class="action-button btn btn-default">Undo</a>
                    <a href="#" class="action-button btn btn-default btn-success" onClick="storeData()">Next</a>
                </div>
             </div>
        </div>
    </body>
</html>
