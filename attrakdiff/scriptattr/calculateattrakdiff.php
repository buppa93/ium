<?php
 class CalculateAttrakdiff
 {
     public function media($score)
     {
        $mediaprova=array_sum($score)/count($score);
        return $mediaprova;
     }

     public function medianormalizzata($score)
     {
         $mediacol= new CalculateAttrakdiff();
         $me=$mediacol->media($score);
         $medianormalizzata=$me-4;
         return $medianormalizzata;
     }

     public function pq($score)
     {
         $i=0;
         $sumcolonna0=0;
         $sumcolonna4=0;
         $sumcolonna7=0;
         $sumcolonna9=0;
         $sumcolonna11=0;
         $sumcolonna19=0;
         $sumcolonna27=0;

        while($score[$i][0]!=null && $score[$i][4]!=null && $score[$i][7]!=null && $score[$i][9]!=null && $score[$i][11]!=null &&
              $score[$i][19]!=null && $score[$i][27]!=null)
         {
            $sumcolonna0+=$score[$i][0];
            $sumcolonna4+=$score[$i][4];
            $sumcolonna7+=$score[$i][7];
            $sumcolonna9+=$score[$i][9];
            $sumcolonna11+=$score[$i][11];
            $sumcolonna19+=$score[$i][19];
            $sumcolonna27+=$score[$i][27];
            $i=$i+1;
        }

        $pqparziale=($sumcolonna0/$i)+($sumcolonna4/$i)+($sumcolonna7/$i)+($sumcolonna9/$i)+($sumcolonna11/$i)+($sumcolonna19/$i)+
        ($sumcolonna27/$i);

        $pqtotale=($pqparziale/7)-4;
        return $pqtotale;
     }

     public function hqi($score)
     {
         $i=0;
         $sumcolonna1=0;
         $sumcolonna5=0;
         $sumcolonna10=0;
         $sumcolonna12=0;
         $sumcolonna13=0;
         $sumcolonna14=0;
         $sumcolonna15=0;
         while($score[$i][1]!=null && $score[$i][5]!=null && $score[$i][10]!=null && $score[$i][12]!=null && $score[$i][13]!=null &&
              $score[$i][14]!=null && $score[$i][15]!=null)
         {
            $sumcolonna1+=$score[$i][1];
            $sumcolonna5+=$score[$i][5];
            $sumcolonna10+=$score[$i][10];
            $sumcolonna12+=$score[$i][12];
            $sumcolonna13+=$score[$i][13];
            $sumcolonna14+=$score[$i][14];
            $sumcolonna15+=$score[$i][15];
            $i=$i+1;
        }
         $hqiparziale=($sumcolonna1/$i)+($sumcolonna5/$i)+($sumcolonna10/$i)+($sumcolonna12/$i)+($sumcolonna13/$i)+($sumcolonna14/$i)+                    ($sumcolonna15/$i);

         $hqitotale= ($hqiparziale/7)-4;
         return $hqitotale;
     }

     public function hqs($score)
     {
         $i=0;
         $sumcolonna3=0;
         $sumcolonna17=0;
         $sumcolonna21=0;
         $sumcolonna22=0;
         $sumcolonna23=0;
         $sumcolonna24=0;
         $sumcolonna26=0;
         while($score[$i][3]!=null && $score[$i][17]!=null && $score[$i][21]!=null && $score[$i][22]!=null && $score[$i][23]!=null &&
              $score[$i][24]!=null && $score[$i][26]!=null)
         {
            $sumcolonna3+=$score[$i][3];
            $sumcolonna17+=$score[$i][17];
            $sumcolonna21+=$score[$i][21];
            $sumcolonna22+=$score[$i][22];
            $sumcolonna23+=$score[$i][23];
            $sumcolonna24+=$score[$i][24];
            $sumcolonna26+=$score[$i][26];
            $i=$i+1;
        }

         $hqsparziale=($sumcolonna3/$i)+($sumcolonna17/$i)+($sumcolonna21/$i)+($sumcolonna22/$i)+($sumcolonna23/$i)+($sumcolonna24/$i)+                  ($sumcolonna26/$i);

         $hqstotale= ($hqsparziale/7)-4;
         return $hqstotale;
     }

     public function att($score)
     {
         $i=0;
         $sumcolonna2=0;
         $sumcolonna6=0;
         $sumcolonna8=0;
         $sumcolonna16=0;
         $sumcolonna18=0;
         $sumcolonna20=0;
         $sumcolonna25=0;
         while($score[$i][2]!=null && $score[$i][6]!=null && $score[$i][8]!=null && $score[$i][16]!=null && $score[$i][18]!=null &&
              $score[$i][20]!=null && $score[$i][25]!=null)
         {
            $sumcolonna2+=$score[$i][2];
            $sumcolonna6+=$score[$i][6];
            $sumcolonna8+=$score[$i][8];
            $sumcolonna16+=$score[$i][16];
            $sumcolonna18+=$score[$i][18];
            $sumcolonna20+=$score[$i][20];
            $sumcolonna25+=$score[$i][25];
            $i=$i+1;
        }

         $attparziale=($sumcolonna2/$i)+($sumcolonna6/$i)+($sumcolonna8/$i)+($sumcolonna16/$i)+($sumcolonna18/$i)+($sumcolonna20/$i)+                    ($sumcolonna25/$i);

         $atttotale= ($attparziale/7)-4;
         return $atttotale;
     }
 }
?>
