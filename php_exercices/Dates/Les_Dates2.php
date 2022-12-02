<?php
//  $date_test = "2019-07-14";
//  $good_format=strtotime ($date_test);
//  echo date('W',$good_format);



function nbrSemaines($date1, $date2)
{
    if ($date1 > $date2) 
    {
        return false;
    }
    else
    {
        $debut = DateTime::createFromFormat('d/m/Y', $date1);
        $fin = DateTime::createFromFormat('d/m/Y', $date2);
    }
}

echo  nbrSemaines('01/01/2019', '14/07/2019');












?>