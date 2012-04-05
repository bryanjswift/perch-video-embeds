<?php
    # include the API
    include('../../inc/api.php');
    
    $API  = new PerchAPI(1.0, 'bryanjswift_video');

    # include your class files
    include("BryanjswiftVideo_Embeds.class.php");
    include("BryanjswiftVideo_Embed.class.php");
    
    # Grab an instance of the Lang class for translations
    $Lang = $API->get('Lang');

    # Set the page title
    $Perch->page_title = $Lang->get('Video App');


    # Do anything you want to do before output is started
    include('modes/list.pre.php');
    
    
    # Top layout
    include(PERCH_PATH . '/inc/top.php');

    
    # Display your page
    include('modes/list.post.php');
    
    
    # Bottom layout
    include(PERCH_PATH . '/inc/btm.php');
?>
