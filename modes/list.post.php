<?php
  $Path = $HTML->encode(PERCH_LOGINPATH);
  # Title panel
  echo $HTML->title_panel_start();
  echo $HTML->heading1('Video');
  echo $HTML->title_panel_end();

  # Side panel
  echo $HTML->side_panel_start();
  echo $HTML->heading3('New Video');

  echo $HTML->para('%sAdd new video%s', '<a href="'.$Path.'/apps/bryanjswift_video/edit/">', '</a>');

  echo $HTML->side_panel_end();

  # Main panel
  echo $HTML->main_panel_start();

  if (isset($message)) echo $message;

  if (PerchUtil::count($posts)) {
?>
  <table class="d">
    <thead>
      <tr>
        <th class="first"><?php echo $Lang->get('Title'); ?></th>  
        <th><?php echo $Lang->get('Url'); ?></th>
        <th class="action last"></th>
      </tr>
    </thead>
    <tbody>
<?php foreach($posts as $Post) { ?>
      <tr>
        <td><a href="<?= $Path ?>/apps/bryanjswift_video/edit/?id=<?php echo $HTML->encode(urlencode($Post->id())); ?>" class="edit"><?php echo $HTML->encode($Post->embedTitle()); ?></a></td>
        <td><?php echo $HTML->encode(strftime('%d %B %Y, %l:%M %p', strtotime($Post->embedUrl()))); ?></td>
        <td><a href="<?= $Path ?>/apps/bryanjswift_video/delete/?id=<?php echo $HTML->encode(urlencode($Post->id())); ?>" class="delete"><?php echo $Lang->get('Delete'); ?></a></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
<?php    
  } // if pages

  echo $HTML->main_panel_end();
?>
