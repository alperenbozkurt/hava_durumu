<?php
  $city = $_GET['sehirler'];

  $api_key = 'c88782fc0ab5e61bb6d856f189971ff0';

  $url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . ',TR&appid=' . $api_key.'&lang=tr&units=metric&cnt=10';

  $respond = file_get_contents($url);

  $data = json_decode($respond, true);
  if ($respond) {
    echo $respond.'<br>';
    echo '<h1>'.$data['name'] . ','.$data['sys']['country'].'</h1>';
    echo '<img src="http://openweathermap.org/img/w/'.$data['weather'][0]['icon'].'.png"><br>';
    echo 'Rüzgar : ' . $data['wind']['speed'] . ' km/s<br>';
    echo 'Hava : '.$data['weather'][0]['main'].'<br>';
    echo 'Durum : '.$data['weather'][0]['description'].'<br>';
    echo 'Sıcaklık : '.$data['main']['temp'].'°'.'<br>';
    echo 'Rüzgar : ' . $data['wind']['speed'] . ' km/s<br>';
    echo 'Gece Sıcaklığı : ' . $data['temp']['night'] . '<br>';

  }
  else {
    if (!$city) {
      echo 'Şehir Seçiniz...';
    }
    else {
      echo $city.' isimli şehir bulunamadı.';
    }
  }
