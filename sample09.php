<?php

for($i=0;$i<31;$i++){
    $time = strtotime("+$i day");

    $day = date('n/j(D)',$time);
    echo "$day\n";
}

?>