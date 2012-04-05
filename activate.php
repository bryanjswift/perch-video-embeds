<?php
  // Prevent running directly:
  if (!defined('PERCH_DB_PREFIX')) exit;

  // Let's go
  $sql = "
  CREATE TABLE IF NOT EXISTS `__PREFIX__bryanjswift_video_embeds` (
    `embedId` int(11) NOT NULL AUTO_INCREMENT,
    `embedTitle` varchar(255) NOT NULL DEFAULT '',
    `embedUrl` text DEFAULT NULL,
    `embedColor` varchar(255) NOT NULL DEFAULT 'ff0307',
    `embedWidth` int(11) NOT NULL DEFAULT 400,
    `embedHeight` int(11) NOT NULL DEFAULT 225,
    PRIMARY KEY (`embedId`)
  ) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
  ";
    
  $sql = str_replace('__PREFIX__', PERCH_DB_PREFIX, $sql);
    
  $statements = explode(';', $sql);
  foreach($statements as $statement) {
    $statement = trim($statement);
    if ($statement != '') { $this->db->execute($statement); }
  }
        
  $sql = 'SHOW TABLES LIKE "' . $this->table . '"';
  $result = $this->db->get_value($sql);
    
  return $result;
