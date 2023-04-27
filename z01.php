<?php
function suma()
{
    $tab = [1,5,3,4,10,20,8];
    sort($tab);
    return $tab[0]+$tab[1];
}
echo suma();