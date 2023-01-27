<?php

//$data = new DateTime();
//echo $data->format('d-m-Y H:i:s'). PHP_EOL;



/*
 * ->P representação de periodo: vem antes de dia, mês, ano e semana
 * Y  anos
 * M  meses
 * D  dias
 * W  semanas
 * ->T  representação de tempo:  vem antes de hora, minutos e segundo
 * H  hors
 * M  minutos
 * S  segundos
 * */

$data = new DateTime();

$intervalo = new DateInterval('PT5M');  // adiciona um intervalo de 5 minutos

$data->add($intervalo);

var_dump($data);


//exercício

$data = new DateTime();

$intervalo = new DateInterval('P5DT10H50M');  // adiciona um intervalo de 5 minutos

$data->sub($intervalo);

var_dump($data->format('d/m/Y H:i:s'));