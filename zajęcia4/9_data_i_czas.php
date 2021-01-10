<?php 
// funkcja Date()
  echo "Rok - miesiąc - dzień: ",date("Y-m-d"),'<br>'; //Rok - miesiąc - dzień: 2020-11-08
  echo "Rok - miesiąc - dzień: ",date("Y-M-d"),'<br>'; //Rok - miesiąc - dzień: 2020-Nov-08
  echo "Dzień - miesiąc - rok: ",date("d-m-Y"),'<br>'; //Dzień - miesiąc - rok: 08-11-2020
  echo date("G:i:s"),'<br>'; //17:33:50
  echo date("h:i:sa"),'<br>'; //05:34:47pm
  echo date("Y-m-d G:i:s"),'<br>'; //2020-11-08 17:35:24
  echo date("w"),'<br>'; //0 - niedziela

// funkcja getdate()
  $data = getdate();

  echo '<pre>',print_r($data),'</pre>';

  // dzień - miesiac - rok, dzientygodnia
  // 08 - listopad - 2020, niedziela
  $seconds = $data['seconds'];
  $result = $seconds.' - '.$seconds;

?>