<?php

  $HTML = $API->get('HTML');

  $Embeds = new BryanjswiftVideo_Embeds($API);

  $posts = array();

  $posts = $Embeds->all();

  // Install only if $posts is false. 
  // This will run the code in activate.php so should only ever happen on first run - silently installing the app.
  if ($posts == false) {
    $Embeds->attempt_install();
  }
?>
