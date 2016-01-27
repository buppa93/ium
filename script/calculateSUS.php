<?php

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

}
