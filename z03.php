<?php
function tablica($tab1,$tab2)
{
    $tab=array_merge($tab1,$tab2);
    sort($tab);
    return$tab;
}
$tab3=[5,6,2,10];
$tab4=[20,2,1,40];
var_dump(tablica($tab3,$tab4));