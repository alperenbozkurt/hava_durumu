<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hava Durumu</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="js/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'functions.php';
    $color = get_backgraund();

  ?>
  <body class="<?php echo $color; ?>">
    <div class="top">
      <div class="title center">
        Hava Durumu Servisi
      </div>
      <div class="index-form shadow center">
        Lütfen Hava Durumunu Görmek İstediğiniz Şehirleri Seçiniz..<br><br>
        <form class="ui form" action="">
          <div class="ui multiple selection dropdown fluid" id="multi-select">
            <input name="sehirler" type="hidden">
            <i class="dropdown icon"></i>
            <div class="default text">Şehirler</div>
            <div class="menu">
              <div class="item" data-value="Adana">Adana</div>
              <div class="item" data-value="Adıyaman">Adıyaman</div>
              <div class="item" data-value="Afyonkarahisar">Afyonkarahisar</div>
              <div class="item" data-value="Ağrı">Ağrı</div>
              <div class="item" data-value="Amasya">Amasya</div>
              <div class="item" data-value="Ankara">Ankara</div>
              <div class="item" data-value="Antalya">Antalya</div>
              <div class="item" data-value="Artvin">Artvin</div>
              <div class="item" data-value="Aydın">Aydın</div>
              <div class="item" data-value="Balıkesir">Balıkesir</div>
              <div class="item" data-value="Bilecik">Bilecik</div>
              <div class="item" data-value="Bingöl">Bingöl</div>
              <div class="item" data-value="Bitlis">Bitlis</div>
              <div class="item" data-value="Bolu">Bolu</div>
              <div class="item" data-value="Burdur">Burdur</div>
              <div class="item" data-value="Bursa">Bursa</div>
              <div class="item" data-value="Çanakkale">Çanakkale</div>
              <div class="item" data-value="Çankırı">Çankırı</div>
              <div class="item" data-value="Çorum">Çorum</div>
              <div class="item" data-value="Denizli">Denizli</div>
              <div class="item" data-value="Diyarbakır">Diyarbakır</div>
              <div class="item" data-value="Edirne">Edirne</div>
              <div class="item" data-value="Elazığ">Elazığ</div>
              <div class="item" data-value="Erzincan">Erzincan</div>
              <div class="item" data-value="Erzurum">Erzurum</div>
              <div class="item" data-value="Eskişehir">Eskişehir</div>
              <div class="item" data-value="Gaziantep">Gaziantep</div>
              <div class="item" data-value="Giresun">Giresun</div>
              <div class="item" data-value="Gümüşhane">Gümüşhane</div>
              <div class="item" data-value="Hakkâri">Hakkâri</div>
              <div class="item" data-value="Hatay">Hatay</div>
              <div class="item" data-value="Isparta">Isparta</div>
              <div class="item" data-value="Mersin">Mersin</div>
              <div class="item" data-value="İstanbul">İstanbul</div>
              <div class="item" data-value="İzmir">İzmir</div>
              <div class="item" data-value="Kars">Kars</div>
              <div class="item" data-value="Kastamonu">Kastamonu</div>
              <div class="item" data-value="Kayseri">Kayseri</div>
              <div class="item" data-value="Kırklareli">Kırklareli</div>
              <div class="item" data-value="Kırşehir">Kırşehir</div>
              <div class="item" data-value="Kocaeli">Kocaeli</div>
              <div class="item" data-value="Konya">Konya</div>
              <div class="item" data-value="Kütahya">Kütahya</div>
              <div class="item" data-value="Malatya">Malatya</div>
              <div class="item" data-value="Manisa">Manisa</div>
              <div class="item" data-value="Kahramanmaraş">Kahramanmaraş</div>
              <div class="item" data-value="Mardin">Mardin</div>
              <div class="item" data-value="Muğla">Muğla</div>
              <div class="item" data-value="Muş">Muş</div>
              <div class="item" data-value="Nevşehir">Nevşehir</div>
              <div class="item" data-value="Niğde">Niğde</div>
              <div class="item" data-value="Ordu">Ordu</div>
              <div class="item" data-value="Rize">Rize</div>
              <div class="item" data-value="Sakarya">Sakarya</div>
              <div class="item" data-value="Samsun">Samsun</div>
              <div class="item" data-value="Siirt">Siirt</div>
              <div class="item" data-value="Sinop">Sinop</div>
              <div class="item" data-value="Sivas">Sivas</div>
              <div class="item" data-value="Tekirdağ">Tekirdağ</div>
              <div class="item" data-value="Tokat">Tokat</div>
              <div class="item" data-value="Trabzon">Trabzon</div>
              <div class="item" data-value="Tunceli">Tunceli</div>
              <div class="item" data-value="Şanlıurfa">Şanlıurfa</div>
              <div class="item" data-value="Uşak">Uşak</div>
              <div class="item" data-value="Van">Van</div>
              <div class="item" data-value="Yozgat">Yozgat</div>
              <div class="item" data-value="Zonguldak">Zonguldak</div>
              <div class="item" data-value="Aksaray">Aksaray</div>
              <div class="item" data-value="Bayburt">Bayburt</div>
              <div class="item" data-value="Karaman">Karaman</div>
              <div class="item" data-value="Kırıkkale">Kırıkkale</div>
              <div class="item" data-value="Batman">Batman</div>
              <div class="item" data-value="Şırnak">Şırnak</div>
              <div class="item" data-value="Bartın">Bartın</div>
              <div class="item" data-value="Ardahan">Ardahan</div>
              <div class="item" data-value="Iğdır">Iğdır</div>
              <div class="item" data-value="Yalova">Yalova</div>
              <div class="item" data-value="Karabük">Karabük</div>
              <div class="item" data-value="Kilis">Kilis</div>
              <div class="item" data-value="Osmaniye">Osmaniye</div>
              <div class="item" data-value="Düzce">Düzce</div>
            </div>
          </div><br>
          <button class="ui animated button right floated <?php echo $color; ?>" tabindex="0">
            <div class="visible content">Hava Durumu Bilgisini Getir</div>
            <div class="hidden content">
              <i class="right arrow icon"></i>
            </div>
          </button>
        </form>
        <br>
        <br>
      </div>
    </div>
    <div class="cities center">
      <?php
        if (isset($_GET['sehirler'])) {
          if ($_GET['sehirler'] != null ) {
            $cities = preg_split('/,/', $_GET['sehirler']);
            $page = 0;
            if (isset($_GET['sayfa'])) {
              $page = $_GET['sayfa'];
            }
            $first =  5 * $page;
            $last = $first + 5;
            $new_cities = array_slice($cities, $first, 5);
            foreach ($new_cities as $city) {
              hava_durumu($city, $color);
            }
          }
        }
      ?>
    </div>
    <?php if (isset($_GET['sehirler'])) { ?>
      <div class="pages center">
        <div class="ui buttons right floated">
          <?php
            if ($page != 0) {
              echo '<a href="?sehirler='.$_GET['sehirler'].'&sayfa='. ($page - 1) .'" class="ui labeled icon button"><i class="left chevron icon"></i>Geri</a>';
            }
            for ($i=0; $i < ceil(count($cities)/5); $i++) {
              $is_active = "";
              if ($page == $i) {
                $is_active = 'active';
              }
              echo '<a href="?sehirler='.$_GET['sehirler'].'&sayfa='. $i .'" class="ui icon button '.$is_active.'"> '. ($i + 1) .'</a>';

            }
            if (count($cities) > $last) {
              echo '<a href="?sehirler='.$_GET['sehirler'].'&sayfa='. ($page + 1) .'" class="ui right labeled icon button">İleri<i class="right chevron icon"></i></a>';
            }
          ?>
        </div>
      </div>
    <?php } ?>
    <script type="text/javascript">
      $('#multi-select')
        .dropdown()
      ;
    </script>
  </body>
</html>
