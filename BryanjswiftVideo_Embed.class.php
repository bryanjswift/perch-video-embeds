<?php
class BryanjswiftVideo_Embed extends PerchAPI_Base {
  protected $table = "bryanjswift_video_embeds";
  protected $pk = "embedId";

  private $regex = "/^.*vimeo.com\\/([0-9]+)[^0-9]?.*$/";
  private $rawVimeoEmbed = '<iframe src="http://player.vimeo.com/video/%videoId%?title=0&amp;portrait=0&amp;color=%color%" width="%width%" height="%height%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><p><a href="http://vimeo.com/%videoId%">%title%</a></p>';

  public function vimeoCode($width = '400', $height = '225', $color = 'ff0307') {
    $videoId = $this->embedUid();
    $embed = str_replace(
      array('%videoId%', '%color%', '%width%', '%height%', '%title%'),
      array($videoId, $color, $width, $height, $this->embedTitle()),
      $this->rawVimeoEmbed
    );
    return $embed;
  }

  public function embedUid() {
    $url = $this->embedUrl();
    $matches = array();
    preg_match($this->regex, $url, $matches);
    $videoId = $matches[1];
    return $videoId;
  }

  public function to_array() {
    $data = parent::to_array();
    $data['embedUid'] = $this->embedUid();
    return $data;
  }
}
