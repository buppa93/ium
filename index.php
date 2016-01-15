<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/table-style.css">
        <link rel="stylesheet" href="./css/test.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form action="./script/send.php" method="post">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="question">Question</th>
                            <th class="val">Strongly Disagree</th>
                            <th class="val">Disagree</th>
                            <th class="val">Undecided</th>
                            <th class="val">Agree</th>
                            <th class="val">Strongly Agree</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="row1">
                            <td id="q1" class="question">Q1: I think that I would like to use this system frequently.</td>
                            <!-- <td id="asw1"> -->
                            <td class="val"><input type="radio" name="a1" value="1"></td>
                            <td class="val"><input type="radio" name="a1" value="2"></td>
                            <td class="val"><input type="radio" name="a1" value="3"></td>
                            <td class="val"><input type="radio" name="a1" value="4"></td>
                            <td class="val"><input type="radio" name="a1" value="5"></td>
                            <!-- </td> -->
                        </tr>
                        <tr id="row2">
                            <td id="q2" class="question">Q2: I found the system unnecessarily complex.</td>
                            <td class="val"><input type="radio" name="a2" value="1"></td>
                            <td class="val"><input type="radio" name="a2" value="2"></td>
                            <td class="val"><input type="radio" name="a2" value="3"></td>
                            <td class="val"><input type="radio" name="a2" value="4"></td>
                            <td class="val"><input type="radio" name="a2" value="5"></td>
                        </tr>
                        <tr id="row3">
                            <td id="q3" class="question">Q3: I thought the system was easy to use.</td>
                            <td class="val"><input type="radio" name="a3" value="1"></td>
                            <td class="val"><input type="radio" name="a3" value="2"></td>
                            <td class="val"><input type="radio" name="a3" value="3"></td>
                            <td class="val"><input type="radio" name="a3" value="4"></td>
                            <td class="val"><input type="radio" name="a3" value="5"></td>
                        </tr>
                        <tr id="row4">
                            <td id="q4" class="question">Q4: I think that I would need the support of a technical person to be able to use this system.</td>
                            <td class="val"><input type="radio" name="a4" value="1"></td>
                            <td class="val"><input type="radio" name="a4" value="2"></td>
                            <td class="val"><input type="radio" name="a4" value="3"></td>
                            <td class="val"><input type="radio" name="a4" value="4"></td>
                            <td class="val"><input type="radio" name="a4" value="5"></td>
                        </tr>
                        <tr id="row5">
                            <td id="q5" class="question">Q5: I found the various functions in this system were well integrated.</td>
                            <td class="val"><input type="radio" name="a5" value="1"></td>
                            <td class="val"><input type="radio" name="a5" value="2"></td>
                            <td class="val"><input type="radio" name="a5" value="3"></td>
                            <td class="val"><input type="radio" name="a5" value="4"></td>
                            <td class="val"><input type="radio" name="a5" value="5"></td>
                        </tr>
                        <tr id="row6">
                            <td id="q6" class="question">Q6: I thought there was too much inconsistency in this system.</td>
                            <td class="val"><input type="radio" name="a6" value="1"></td>
                            <td class="val"><input type="radio" name="a6" value="2"></td>
                            <td class="val"><input type="radio" name="a6" value="3"></td>
                            <td class="val"><input type="radio" name="a6" value="4"></td>
                            <td class="val"><input type="radio" name="a6" value="5"></td>
                        </tr>
                        <tr id="row7">
                            <td id="q7" class="question">Q7: I would imagine that most people would learn to use this system very quickly.</td>
                            <td class="val"><input type="radio" name="a7" value="1"></td>
                            <td class="val"><input type="radio" name="a7" value="2"></td>
                            <td class="val"><input type="radio" name="a7" value="3"></td>
                            <td class="val"><input type="radio" name="a7" value="4"></td>
                            <td class="val"><input type="radio" name="a7" value="5"></td>
                        </tr>
                        <tr id="row8">
                            <td id="q8" class="question">Q8: I found the system very cumbersome to use.</td>
                            <td class="val"><input type="radio" name="a8" value="1"></td>
                            <td class="val"><input type="radio" name="a8" value="2"></td>
                            <td class="val"><input type="radio" name="a8" value="3"></td>
                            <td class="val"><input type="radio" name="a8" value="4"></td>
                            <td class="val"><input type="radio" name="a8" value="5"></td>
                        </tr>
                        <tr id="row9">
                            <td id="q9" class="question">Q9: I felt very confident using the system.</td>
                            <td class="val"><input type="radio" name="a9" value="1"></td>
                            <td class="val"><input type="radio" name="a9" value="2"></td>
                            <td class="val"><input type="radio" name="a9" value="3"></td>
                            <td class="val"><input type="radio" name="a9" value="4"></td>
                            <td class="val"><input type="radio" name="a9" value="5"></td>
                        </tr>
                        <tr id="row10">
                            <td id="q10" class="question">Q10: I needed to learn a lot of things before I could get going with this system.</td>
                            <td class="val"><input type="radio" name="a10" value="1"></td>
                            <td class="val"><input type="radio" name="a10" value="2"></td>
                            <td class="val"><input type="radio" name="a10" value="3"></td>
                            <td class="val"><input type="radio" name="a10" value="4"></td>
                            <td class="val"><input type="radio" name="a10" value="5"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="bttn-group col-lg-12">
                <input type="button" value="Undo" class="action-button btn btn-default">
                <input type="submit" value="Submit" class="action-button btn btn-default">
                </div>
            </form>
        </div>
    </body>
</html>
