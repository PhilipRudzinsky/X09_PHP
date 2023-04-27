<?php
function imie()
{
    $a=0;
    $tab=["Paweł","Gaweł","Alicja","Ania","Marysia","Piotr"];
    for($i=0;$i<count($tab);$i++)
    {
        $b=$tab[$i];
        if($b[strlen($b)-1]=='a')
        {
            $a++;
        }
    }
    return $a;

}
echo imie();