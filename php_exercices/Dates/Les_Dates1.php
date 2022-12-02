<?php
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
        return round($debut->diff($fin)->days/7);
    }
}

echo "nbrSemaines " . nbrSemaines('01/01/2019', '14/07/2019');
?>