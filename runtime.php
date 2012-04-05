<?php

    include("BryanjswiftVideo_Embeds.class.php");
    include("BryanjswiftVideo_Embed.class.php");

    /**
     * Renders the detail of an embed based on embedId
     * @param int $embedId
     * @param string $template
     * @param bool $return if set to true does *not* echo the output before returning it
     */
    function bryanjswift_vimeo_embed($embedId, $template = "embed.html", $return = false) {
      $API = new PerchAPI(1.0, "bryanjswift_video");
      $Embeds = new BryanjswiftVideo_Embeds($API);

      $Embed = $Embeds->find($embedId, true);

      $list = array($Embed);

      $Template = $API->get("Template");
      $Template->set("embed/" . $template, "embed");

      $r = $Template->render_group($list, true);

      if (!$return) { echo $r; }

      return $r;
    }
