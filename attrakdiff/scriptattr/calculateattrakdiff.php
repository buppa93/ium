<?
 class calculateAttrakdiff
 {
     public function media($score)
     {
         $mediacolonna=0;
        for($i=0; $i<=count($score); $i++)
        {
            $mediacolonna+=$score[$i];
        }
         $mediacolonna=$mediacolonna/count($score);
         return $mediacolonna;
     }

     public function medianormalizzata(media)
     {
         $mediacol=media;
         $medianormalizzata=$mediacol-4;
         return $medianormalizzata;
     }

     public function pq($score)
     {
         $pqtotale=0;
         $pqparziale=0;
         $pqparziale=media($score[0])+media($score[4])+media($score[7])+media($score[9])+media($score[11])+media($score[19])+media($score[27]);
         $pqtotale= ($pqparziale/7)-4;
         return $pqtotale;
     }

     public function hqi($score)
     {
         $hqitotale=0;
         $hqiparziale=0;
         $hqiparziale=media($score[1])+media($score[5])+media($score[10])+media($score[12])+media($score[13])+media($score[14])+
         media($score[15]);
         $hqitotale= ($hqiparziale/7)-4;
         return $hqitotale;
     }

     public function hqs($score)
     {
         $hqstotale=0;
         $hqsparziale=0;
         $hqsparziale=media($score[3])+media($score[17])+media($score[21])+media($score[22])+media($score[23])+media($score[24])+
         media($score[26]);
         $hqstotale= ($hqsparziale/7)-4;
         return $hqstotale;
     }

     public function att($score)
     {
         $atttotale=0;
         $attparziale=0;
         $attparziale=media($score[2])+media($score[6])+media($score[8])+media($score[16])+media($score[18])+media($score[20])+
         media($score[25]);
         $atttotale= ($attparziale/7)-4;
         return $atttotale;
     }
 }
