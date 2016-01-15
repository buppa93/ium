<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/attrak.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
            function storeData()
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
            }
        </script>
    </head>

    <body>
         <div class="container">
             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">stylish</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b1" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b1" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b1" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b1" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b1" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">tacky</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:#ccffe6;">predictable</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b2" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b2" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b2" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b2" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b2" value="5"></div>
                <div class="col-lg-3" style="background-color:#ccffe6;">unpredictable</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:lavender; ">cheap</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b3" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b3" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b3" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b3" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b3" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">premium</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:#ccffe6;">alienating</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b4" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b4" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b4" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b4" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b4" value="5"></div>
                <div class="col-lg-3" style="background-color:#ccffe6;">integrating</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;"> brings me closer to people </div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b5" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b5" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b5" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b5" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b5" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">separates me from people</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:#ccffe6;">unpresentable</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b6" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b6" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b6" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b6" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b6" value="5"></div>
                <div class="col-lg-3" style="background-color:#ccffe6;">presentable</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">rejecting</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b7" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b7" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b7" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b7" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b7" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">inviting</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:#ccffe6;">unimaginative</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b8" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b8" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b8" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b8" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b8" value="5"></div>
                <div class="col-lg-3" style="background-color:#ccffe6;">creative</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">good</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b9" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b9" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b9" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b9" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="b9" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">bad</div>
             </div>
         </div>
        <div class="bttn-group col-lg-12">
                <input type="button" value="Undo" class="action-button btn btn-default">
                <!-- <input type="submit" value="Submit" class="action-button btn btn-default btn-success"> -->
                <a href="attrak3.php" class="action-button btn btn-default btn-success" onClick="storeData()">Next</a>
                </div>
    </body>
</html>
