<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/small-device.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form action="./script/send.php" method="post">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-lg-7 col-xs-12">Question</div>
                                    <div class="col-lg-1 col-xs-2 personal">Strongly Disagree</div>
                                    <div class="col-lg-1 col-xs-2 personal">Disagree</div>
                                    <div class="col-lg-1 col-xs-2 personal">Undecided</div>
                                    <div class="col-lg-1 col-xs-2 personal">Agree</div>
                                    <div class="col-lg-1 col-xs-2 personal">Strongly Agree</div>
                                </div>
                        </div>
                        </li>
                        <div class="panel-body">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-7 col-xs-12">Q1: I think that I would like to use this system frequently.</div>
                                        <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a1" value="1"></div>
                                        <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a1" value="2"></div>
                                        <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a1" value="3"></div>
                                        <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a1" value="4"></div>
                                        <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a1" value="5"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-7 col-xs-12">Q2: I found the system unnecessarily complex.</div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a2" value="1"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a2" value="2"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a2" value="3"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a2" value="4"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a2" value="5"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-7 col-xs-12">Q3: I thought the system was easy to use.</div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a3" value="1"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a3" value="2"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a3" value="3"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a3" value="4"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a3" value="5"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-7 col-xs-12">Q4: I think that I would need the support of a technical person to be able to use this system.</div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a4" value="1"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a4" value="2"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a4" value="3"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a4" value="4"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a4" value="5"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-7 col-xs-12">Q5: I found the various functions in this system were well integrated.</div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a5" value="1"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a5" value="2"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a5" value="3"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a5" value="4"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a5" value="5"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-7 col-xs-12">Q6: I thought there was too much inconsistency in this system.</div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a6" value="1"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a6" value="2"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a6" value="3"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a6" value="4"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a6" value="5"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-7 col-xs-12">Q7: I would imagine that most people would learn to use this system very quickly.</div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a7" value="1"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a7" value="2"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a7" value="3"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a7" value="4"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a7" value="5"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-7 col-xs-12">Q8: I found the system very cumbersome to use.</div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a8" value="1"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a8" value="2"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a8" value="3"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a8" value="4"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a8" value="5"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-7 col-xs-12">Q9: I felt very confident using the system.</div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a9" value="1"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a9" value="2"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a9" value="3"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a9" value="4"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a9" value="5"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-7 col-xs-12">Q10: I needed to learn a lot of things before I could get going with this system.</div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a10" value="1"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a10" value="2"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a10" value="3"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a10" value="4"></div>
                                    <div class="col-lg-1 col-sm-1 col-xs-2"><input type="radio" name="a10" value="5"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="panel-footer bttn-group col-lg-12">
                                        <div class="bttn-group">
                                            <input type="button" value="Undo" class="action-button btn btn-default">
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            </form>
        </div>
    </body>
</html>
