<?php 

    // BEGIN CEON URI MAPPING 1 of 2
    require_once(DIR_WS_CLASSES . 'class.CeonURIMappingAdminProductPages.php');
    
    $ceon_uri_mapping_admin = new CeonURIMappingAdminProductPages();
    
    $ceon_uri_mapping_admin->collectInfoHandler();
    
    // END CEON URI MAPPING 1 of 2 

   // $extra_html_end .= "<!-- BEGIN CEON URI MAPPING 2 of 2 -->" . $ceon_uri_mapping_admin->collectInfoBuildURIMappingFields() . "<!-- END CEON URI MAPPING 2 of 2 -->"; 
