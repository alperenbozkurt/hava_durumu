<?php
  function hava_durumu($city, $color) {
    $api_key = 'c88782fc0ab5e61bb6d856f189971ff0';
    $url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . ',TR&appid=' . $api_key.'&lang=tr&units=metric&cnt=10';
    $respond = file_get_contents($url);
    $data = json_decode($respond, true);
    include 'sehir.html.php';
  }
  function humanize($text) {
    $first = $text[0];
    $next = substr($text, 1, strlen($text)-1);
    $first = strtoupper($first);
    $ret = $first.$next;
    return $ret;
  }
  function get_backgraund(){
    $api_key = 'c88782fc0ab5e61bb6d856f189971ff0';
    $url = 'http://api.openweathermap.org/data/2.5/weather?q=Ankara,TR&appid=' . $api_key.'&lang=tr&units=metric&cnt=10';
    $respond = file_get_contents($url);
    $data = json_decode($respond, true);
    $sunset = date('G',$data['sys']['sunset']);
    $sunrise = date('G',$data['sys']['sunrise']);
    $now = date('G');
    if ((int)$sunset > (int)$now && (int)$sunrise < (int)$now) {
      return 'blue';
    }
    return 'purple';
  }
