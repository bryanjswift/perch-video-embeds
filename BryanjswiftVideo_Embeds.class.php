<?php
class BryanjswiftVideo_Embeds extends PerchAPI_Factory {
  protected $table = "bryanjswift_video_embeds";
  protected $pk = "embedId";
	protected $singular_classname = 'BryanjswiftVideo_Embed';
	protected $default_sort_column = 'embedId';
	
  function __construct($api=false) {
    $this->cache = array();
    parent::__construct($api);
  }
}
