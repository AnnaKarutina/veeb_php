<?php
$raamatud = array(
    array(
        'nimi' => 'Enesehinnangu tööraamat teismelistele',
        'autor' => 'Lisa M. Schab',
        'keel' => 'eesti',
        'lk' => 192,
        'hind' => 15.75
    ),
    array(
        'nimi' => 'Põrsas Peppa. Esimesed numbrid',
        'autor' => 'eOne',
        'keel' => 'eesti',
        'lk' => 10,
        'hind' => 5.85
    ),
    array(
        'nimi' => 'Jänku-Jass mängib peitust',
        'autor' => 'Julia Sigarova',
        'keel' => 'eesti',
        'lk' => 12,
        'hind' => 10.15
    )
);

function tabeliPais($andmed){
   echo '<thead>';
       echo '<tr>';
       foreach ($andmed as $element){
           echo '<th>'.$element.'</th>';
       }
       echo '</tr>';
   echo '</thead>';
}

function tabeliRida($raamat){
    echo '<tr>';
    foreach ($raamat as $elemendiNimetus => $elemendiVaartus){
        echo '<td>'.$elemendiVaartus.'</td>';
    }
    echo '</tr>';
}

//$tabeli_pealkiri = array_keys($raamatud[0]);
echo '<table border="1">';
tabeliRida($raamatud[0]);
tabeliRida($raamatud[1]);
echo '</table>';


