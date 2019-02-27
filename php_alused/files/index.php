<?php

function failiKontroll($failiNimi){
    if(file_exists($failiNimi) and is_file($failiNimi) and is_readable($failiNimi)){
        return true;
    }
    return false;
}

function loeFailist($failiNimi){
    if(failiKontroll($failiNimi)){
        $fp = fopen($failiNimi, 'r');
        while(!feof($fp)){
            $rida = fgets($fp);
            if(trim($rida) == ''){
                echo '==================<br>';
            } else {
                echo $rida . '<br>';
            }
        }
    }
}

loeFailist('raamatud.txt');