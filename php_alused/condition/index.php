<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 13.02.2019
 * Time: 14:14
 */
$eesnimi = 'Anna';
$perenimi = 'Karutina';
$vanus = 38;
$kaal = 53.4;
$sugu = 'naine';

echo ($sugu == 'mees') ? '<p style="color: blue">' : '<p style="color: red">';

echo 'Minu eesnimi on '.$eesnimi.'<br>';
echo 'Minu perenimi on '.$perenimi.'<br>';
echo 'Olen '.$vanus.' aastat vana<br>';
echo 'Kaalun '.$kaal.' kg<br>';
echo '</p>';

