<?php

function failiKontroll($failiNimi){
    if(file_exists($failiNimi) and is_file($failiNimi) and is_readable($failiNimi)){
        return true;
    }
    return false;
}

function loeFailist($failiNimi){
    $raamatud = array();
    $nimetused = array(
        'nimetus',
        'autor',
        'keel',
        'lk',
        'hind'
    );
    if(failiKontroll($failiNimi)){
        $fp = fopen($failiNimi, 'r');
        $raamat = array();
        while(!feof($fp)){
            $rida = fgets($fp);
            if(trim($rida) != ''){
                $raamat[] = $rida;
            } else {
                $raamat = array_combine($nimetused, $raamat);
                $raamatud[] = $raamat;
                $raamat = array();
            }
        }
    }
    return $raamatud;
}

function tabeliPais($andmed){
    echo '<thead>';
    echo '<tr>';
    foreach ($andmed as $element){
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
    echo '</thead>';
}

function tabeliRida($andmed){
    echo '<tr>';
    foreach ($andmed as $elemendiNimetus => $elemendiVaartus){
        echo '<td>'.$elemendiVaartus.'</td>';
    }
    echo '</tr>';
}

function tabel($andmed){
    echo '<table border="1">';
    tabeliPais(array_keys($andmed[0]));
    echo '<tbody>';
    foreach ($andmed as $element){
        tabeliRida($element);
    }
    echo '</tbody>';
    echo '</table>';
}

tabel(loeFailist('raamatud.txt'));