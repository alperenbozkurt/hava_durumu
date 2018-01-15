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
  <body>
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
              <div class="item" data-value="ankara">Ankara</div>
              <div class="item" data-value="istanbul">İstanbul</div>
              <div class="item" data-value="izmir">İzmir</div>
              <div class="item" data-value="antalya">Antalya</div>
              <div class="item" data-value="kastamonu">Kastamonu</div>
              <div class="item" data-value="bursa">Bursa</div>
              <div class="item" data-value="erzincan">Erzincan</div>
              <div class="item" data-value="kırşehir">Kırşehir</div>
            </div>
          </div><br>
          <button class="ui animated button right floated purple" tabindex="0">
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
    <div class="cities center row">
      <?php
        include 'functions.php';
        if ($_GET['sehirler']) {
          $sehirler = preg_split('/,/', $_GET['sehirler']);
          foreach ($sehirler as $sehir) {
            hava_durumu($sehir);
          }
        }
      ?>
    </div>
    <script type="text/javascript">
      $('#multi-select')
        .dropdown()
      ;
    </script>
  </body>
</html>
