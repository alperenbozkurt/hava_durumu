<div class="city shadow">
  <?php
    echo '<h2 style="text-align: center;">'.$data['name'].' '.$data['main']['temp'].'°</h2>';
    echo '<h3>'.humanize($data['weather'][0]['description']).'</h3><br>';
    echo '<div class="img"><img src="img/'.$data['weather'][0]['icon'].'.png"></div><br>';
  ?>
</div>