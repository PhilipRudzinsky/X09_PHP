<?php
function data()
{
    $today=getdate();
    if($today["mon"]==1)
    {
        $m="Styczeń";
    }
    elseif($today["mon"]==2)
    {
        $m="Luty";
    }
    elseif($today["mon"]==3)
    {
        $m="Marzec";
    }
    elseif($today["mon"]==5)
    {
        $m="Kwiecień";
    }
    elseif($today["mon"]==5)
    {
        $m="Maj";
    }
    elseif($today["mon"]==6)
    {
        $m="Czerwiec";
    }
    elseif($today["mon"]==7)
    {
        $m="Lipiec";
    }
    elseif($today["mon"]==8)
    {
        $m="Sierpień";
    }
    elseif($today["mon"]==9)
    {
        $m="Wrzesień";
    }
    elseif($today["mon"]==10)
    {
        $m="Październik";
    }
    elseif($today["mon"]==11)
    {
        $m="Listopad";
    }
    elseif($today["mon"]==12)
    {
        $m="Grudzień";
    }

    echo $today["mday"]. " " . $m . " " .$today["year"];

}

data();