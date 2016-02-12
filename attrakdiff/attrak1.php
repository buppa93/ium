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
            function storeData()
            {
                if(($('input[name=a1]:checked').length<=0)|| ($('input[name=a2]:checked').length<=0) || ($('input[name=a3]:checked').length<=0) || ($('input[name=a4]:checked').length<=0) || ($('input[name=a5]:checked').length<=0) || ($('input[name=a6]:checked').length<=0) || ($('input[name=a7]:checked').length<=0) || ($('input[name=a8]:checked').length<=0) || ($('input[name=a9]:checked').length<=0) || ($('input[name=a10]:checked').length<=0))
                    {
                        alert("WARNING! Please check all items.")
                    } else
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
                            location.href="attrak2.php";
                        }
            }
        </script>
    </head>

    <body>
         <form id="attpage">
         <div class=" container container_attrak">
             <p>
                With the help of the word pairs please enter what you consider the most appropriate description for UTAssistant.
                <br><br>
                 Please click one item in every line.
                 <br><br>
             </p>
             <script>
             </script>

             <div class="row" id="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">1.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">human </div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a1" name="a1" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a1" name="a1" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a1" name="a1" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a1" name="a1" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a1" name="a1" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">technical</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row" id="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">2.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">isolating</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a2" name="a2" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a2" name="a2" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a2" name="a2" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a2" name="a2" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a2" name="a2" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">connective</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row" id="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">3.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">pleasant</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a3" name="a3" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a3" name="a3" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a3" name="a3" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a3" name="a3" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a3" name="a3" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">unpleasant</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row" id="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">4.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">inventive</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a4" name="a4" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a4" name="a4" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a4" name="a4" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a4" name="a4" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a4" name="a4" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">conventional</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row" id="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">5.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">simple</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a5" name="a5" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a5" name="a5" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a5" name="a5" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a5" name="a5" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a5" name="a5" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">complicated</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row" id="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">6.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">professional</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a6" name="a6" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a6" name="a6" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a6" name="a6" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a6" name="a6" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a6" name="a6" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">unprofessional</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row" id="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">7.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">ugly</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a7" name="a7" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a7" name="a7" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a7" name="a7" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a7" name="a7" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a7" name="a7" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">attractive</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row" id="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">8.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">pratical</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a8" name="a8" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a8" name="a8" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a8" name="a8" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a8" name="a8" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a8" name="a8" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">impratical</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row" id="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">9.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">likeable</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a9" name="a9" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a9" name="a9" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a9" name="a9" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a9" name="a9" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a9" name="a9" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">disagreeable</div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#d9d9d9;"></div>
             </div>
             <div class="row" id="row">
                <div class="col-lg-1 col-sm-1 col-xs-1">10.</div>
                <div class="col-lg-3 col-sm-3 col-xs-3">cumbersome</div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a10" name="a10" value="1"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a10" name="a10" value="2"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a10" name="a10" value="3"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a10" name="a10" value="4"></div>
                <div class="col-lg-1 col-sm-1 col-xs-1"><input type="radio" id="a10" name="a10" value="5"></div>
                <div class="col-lg-3 col-sm-3 col-xs-3">straightforward</div>
             </div>
              <div class="bttn-group col-lg-12">
                <a href="#" class="action-button btn btn-default btn-success" onClick="storeData()">Next</a>
                </div>
             </div>
        </form>
    </body>
</html>
