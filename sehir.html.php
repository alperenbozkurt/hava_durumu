<div class="city shadow">
  <?php
    if ($clock == -1) {
      echo '<h2 class="text-'.$color.'">'.$data['name'].' '.round($data['main']['temp']).'°</h2>';
      echo '<h3>'.humanize($data['weather'][0]['description']).'</h3><br>';
      echo '<div class="img"><img src="img/'.$data['weather'][0]['icon'].'.png"></div><br>';
    }
    else {
      echo '<h2 class="text-'.$color.'">'.$data['city']['name'].' '.round($data['list'][$clock]['main']['temp']).'°</h2>';
      echo '<h3>'.humanize($data['list'][$clock]['weather'][0]['description']).'</h3><br>';
      echo '<div class="img"><img src="img/'.$data['list'][$clock]['weather'][0]['icon'].'.png"></div><br>';
    }
  ?>
</div>
