<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/attrak.css">
        <link rel="stylesheet" href="./css/small-device.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
            function storeData()
            {
                 if(($('input[name=b1]:checked').length<=0)|| ($('input[name=b2]:checked').length<=0) || ($('input[name=b3]:checked').length<=0) || ($('input[name=b4]:checked').length<=0) || ($('input[name=b5]:checked').length<=0) || ($('input[name=b6]:checked').length<=0) || ($('input[name=b7]:checked').length<=0) || ($('input[name=b8]:checked').length<=0) || ($('input[name=b9]:checked').length<=0))
                    {
                        alert("WARNING! Please check all items.")
                    } else
                        {

                var storeBox = {};
                storeBox['q1p2'] = $('input[name=b1]:checked').val();
                storeBox['q2p2'] = $('input[name=b2]:checked').val();
                storeBox['q3p2'] = $('input[name=b3]:checked').val();
                storeBox['q4p2'] = $('input[name=b4]:checked').val();
                storeBox['q5p2'] = $('input[name=b5]:checked').val();
                storeBox['q6p2'] = $('input[name=b6]:checked').val();
                storeBox['q7p2'] = $('input[name=b7]:checked').val();
                storeBox['q8p2'] = $('input[name=b8]:checked').val();
                storeBox['q9p2'] = $('input[name=b9]:checked').val();
                sessionStorage.setItem('storeBoxpage2', JSON.stringify(storeBox));
                console.log(storeBox);
                location.href="attrak3.php";
                        }
            }
        </script>
    </head>

    <body>
         <div class="container">
             <p>
                With the help of the word pairs please enter what you consider the most appropriate description for UTAssistant.
                 <br><br>
                 Please click one item in every line.
                 <br><br>
             </p>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">1.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">stylish</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b1" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b1" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b1" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b1" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b1" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">tacky</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">2.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">predictable</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b2" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b2" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b2" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b2" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b2" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">unpredictable</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">3.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">cheap</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b3" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b3" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b3" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b3" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b3" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">premium</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">4.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">alienating</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b4" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b4" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b4" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b4" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b4" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">integrating</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">5.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3"> brings me closer to people </div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b5" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b5" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b5" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b5" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b5" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">separates me from people</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">6.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">unpresentable</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b6" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b6" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b6" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b6" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b6" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">presentable</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">7.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">rejecting</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b7" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b7" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b7" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b7" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b7" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">inviting</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">8.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">unimaginative</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b8" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b8" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b8" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b8" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b8" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">creative</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">9.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">good</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b9" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b9" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b9" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b9" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" name="b9" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">bad</div>
             </div>
         </div>
        <div class="bttn-group col-lg-12">
                <a href="attrak1.php" class="action-button btn btn-default">Undo</a>
                <a href="#" class="action-button btn btn-default btn-success" onClick="storeData()">Next</a>
                </div>
    </body>
</html>
