<?php

// BEGIN CEON URI MAPPING 1 of 1
    require_once(DIR_WS_CLASSES . 'class.CeonURIMappingAdminProductPages.php');
    
    $ceon_uri_mapping_admin = new CeonURIMappingAdminProductPages();
    
    $ceon_uri_mapping_admin->updateProductHandler($products_id, $zc_products->get_handler($product_type));
    
    // END CEON URI MAPPING 1 of 1