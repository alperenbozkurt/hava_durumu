<?php

$city = $_GET['sehir'];

$api_key = '';

$url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . ',TR&appid=' . $api_key;

$respond = file_get_contents($url);

$data = json_decode($respond, true);
if ($respond) {
  echo $respond;
  echo $data['weather'][0]['main'];
}
else {
  if (!$city) {
    echo 'Şehir Seçiniz...';
  }
  else {
    echo $city.' isimli şehir bulunamadı.';
  }
}
