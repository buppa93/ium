<?php

require ('./attrakdiff/scriptattr/calculateattrakdiff.php');
class CalculateSUS
{
    public function getScore($score)
    {
        $dispari = 0;
        $pari = 0;
        for($i=3; $i<=12; $i++)
        {
            if((($i-2)%2)!=0)
            {
                $score[$i]= $score[$i]-1;
                $dispari+=$score[$i];
            }
            else
            {
                $score[$i]=5-$score[$i];
                $pari+=$score[$i];
            }
        }

        $scorePARZ=$pari+$dispari;
        $scoreTOT=$scorePARZ*2.5;
        return $scoreTOT;
    }


    public function getScoreUsability($score)
    {
        $dispari = 0;
        $pari = 0;
        for($i=3; $i<=12; $i++)
        {
            if(($i!=6)&& ($i!=12))
            {
                if((($i-2)%2)!=0)
                {
                    $score[$i]= $score[$i]-1;
                    $dispari+=$score[$i];
                }
                else
                {
                    $score[$i]=5-$score[$i];
                    $pari+=$score[$i];
                }
            }

        }

    $scorePARZ=$pari+$dispari;
    $scoreTOT=$scorePARZ*3.125;
    return $scoreTOT;


    }

    public function getScoreLearnability($score)
    {
        $tot=((5-$score[6])+(5-$score[12]))*12.5;

        return $tot;
    }

    public function printTable($data)
    {
        for($i=0;$i<count($data);$i++)
        {
            for($j=0;$j<13;$j++)
            {
                if($j==12)
                {
                    echo $data[$i][$j]."<br>";
                }
                else
                {
                    echo $data[$i][$j]." ";
                }
            }
        }
    }
        public function devst($score)
    {
        $valoremedio = new CalculateAttrakdiff();
        $calcolomedia= $valoremedio -> media($score);
            $dev=0;
        for($i=0; $i<count($score); $i++)
            {
                $dev+= ($score[$i] - $calcolomedia)* ($score[$i] - $calcolomedia);
            }
        $devstandard= $dev/(count($score)-1);
        return sqrt($devstandard);
    }

    public function confidenza($score)
    {
        $deviazione= new CalculateSUS();
        $devstandard=$deviazione-> devst($score);
        $intconfidenza=1.96*($devstandard/sqrt(count($score)));
        return $intconfidenza;
    }

    public function upper($score)
    {
        $valoremedio = new CalculateAttrakdiff();
        $calcolomedia= $valoremedio -> media($score);
        $confidenza= new CalculateSUS();
        $conf=$confidenza-> confidenza($score);
        $upperbound= $calcolomedia+($conf/2);
        return $upperbound;
    }

    public function lower($score)
    {
        $valoremedio = new CalculateAttrakdiff();
        $calcolomedia= $valoremedio -> media($score);
        $confidenza= new CalculateSUS();
        $conf=$confidenza-> confidenza($score);
        $lowerbound= $calcolomedia-($conf/2);
        return $lowerbound;
    }
}
?>
