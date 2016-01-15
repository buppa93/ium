<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/attrak.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
            function storeData()
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
                <div class="col-lg-3" style="background-color:lavender;">confusing</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c1" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c1" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c1" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c1" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c1" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">clearly structured</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:#ccffe6;">repelling</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c2" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c2" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c2" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c2" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c2" value="5"></div>
                <div class="col-lg-3" style="background-color:#ccffe6;">appealing</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">bold</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c3" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c3" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c3" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c3" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c3" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">cautious</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:#ccffe6;">innovative</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c4" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c4" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c4" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c4" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c4" value="5"></div>
                <div class="col-lg-3" style="background-color:#ccffe6;">conservative</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">dull </div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c5" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c5" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c5" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c5" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c5" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">captivating</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:#ccffe6;">undemanding</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c6" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c6" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c6" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c6" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c6" value="5"></div>
                <div class="col-lg-3" style="background-color:#ccffe6;">challenging</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">motivating</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c7" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c7" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c7" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c7" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c7" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">discouraging</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:#ccffe6;">novel</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c8" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c8" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c8" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c8" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c8" value="5"></div>
                <div class="col-lg-3" style="background-color:#ccffe6;">ordinary</div>
             </div>

             <div class="row">
                <div class="col-lg-3" style="background-color:lavender;">unruly</div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c9" value="1"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c9" value="2"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c9" value="3"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c9" value="4"></div>
                <div class="col-lg-1" style="background-color:white;"><input type="radio" name="c9" value="5"></div>
                <div class="col-lg-3" style="background-color:lavender;">manageable</div>
             </div>
        </div>
        <div class="bttn-group col-lg-12">
                <input type="button" value="Undo" class="action-button btn btn-default">
                <!-- <input type="submit" value="Submit" class="action-button btn btn-default btn-success"> -->
                <a href="attrak4.php" class="action-button btn btn-default btn-success">Next</a>
        </div>
    </body>
</html>
