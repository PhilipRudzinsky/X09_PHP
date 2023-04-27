<?php
function data($m,$d,$r)
{
    $today = getdate();
    if(!checkdate($m,$d,$r))
    {
        return "Zła data";
    }
    else
    {
        if($today["year"]<=$r)
        {
            if($today["mon"]<=$m)
            {
                if($today["mday"]<=$d)
                {
                    return "Teraźniejszość lub przyszłość";
                }
                else
                {
                    return "Historia";
                }

            }
            else
                return "Historia";
        }
        else return "Historia";
    }
}

echo data(12,7,2022);