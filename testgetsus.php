<?php
    require('./script/DBEngine.php');
    require('./script/calculateSUS.php');
    $db = new DBEngine();
    $db->connect();
    $db->selectDB();
    $data = $db->getSUS();

    $sus = new CalculateSUS();
    $sus->printTable($data);
    $SUSscore = 0;
    $SUSusability = 0;
    $SUSlearnability = 0;
    echo "<br>";
    echo "####################### test delle funzioni #######################<br><br>";
    for($i=0; $i<count($data); $i++)
    {
        echo 1+$i."-> SUS SCORE= ".$sus->getScore($data[$i])."<br>";
        echo 1+$i."-> SUS SCORE USABILITY= ".$sus->getScoreUsability($data[$i])."<br>";
        echo 1+$i."-> SUS SCORE LEARNABILITY= ".$sus->getScoreLearnability($data[$i])."<br><br>";
        $SUSscore += $sus->getScore($data[$i]);
        $SUSusability += $sus->getScoreUsability($data[$i]);
        $SUSlearnability += $sus->getScoreLearnability($data[$i]);
    }
?>
<html>
    <head>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script language="javascript">

                var data;
                var chart;
                var SUSscore = 0;
                var SUSlearnability = 0;
                var SUSusability = 0;
                SUSscore = <?php echo($SUSscore);?>;
                SUSlearnability = <?php echo($SUSlearnability);?>;
                SUSusability = <?php echo($SUSusability);?>;
                google.load("visualization", "1", {packages:["corechart"]});
                google.setOnLoadCallback(drawChart);
                function drawChart()
                {
                    var data = google.visualization.arrayToDataTable([
                        ['SUS', 'Value'],
                        ['SUS Score', SUSscore],
                        ['SUS Learnability', SUSlearnability],
                        ['SUS Usability', SUSusability]
                    ]);
                    var options = {title: 'SUS PIE CHART TEST'};
                    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                }


        </script>
        <script type="text/javascript">
            var SUSscore = 0;
            var SUSlearnability = 0;
            var SUSusability = 0;
            SUSscore = <?php echo($SUSscore);?>;
            SUSlearnability = <?php echo($SUSlearnability);?>;
            SUSusability = <?php echo($SUSusability);?>;
            google.load('visualization', '1');   // Don't need to specify chart libraries!
            google.setOnLoadCallback(drawVisualization);

            function drawVisualization()
            {
                var wrapper = new google.visualization.ChartWrapper({
                chartType: 'ColumnChart',
                dataTable: [['','SUS Score', 'SUS Learnability', 'SUS Usability'],
                            ['', SUSscore, SUSlearnability, SUSusability]],
                options: {'title': 'SUS BAR CHART TEST'},
                containerId: 'vis_div'
                });
                wrapper.draw();
            }
        </script>
    </head>
    <body>
        <!--Div that will hold the pie chart-->
        <div id="chart_div" style="width:600; height:500"></div>
        <div id="vis_div" style="width:600; height:500"></div>
    </body>
</html>
