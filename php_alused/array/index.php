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

$tabeli_pealkiri = array_keys($raamatud[0]);
echo '<table border="1">';
tabeliPais($tabeli_pealkiri);
echo '</table>';


