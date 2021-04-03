<?php

/* # # # # # Inject javascript to display an ad on the sidebar # # # # #
 *
 * 
 * 
 * 
 * 
 */
function display_random_ad() {

    $choice = rand(1, 7);

    switch ($choice) {

        case 1: // Best Selling in Web Development Software
            echo '
            <center>
                <script type="text/javascript">
                    amzn_assoc_ad_type = "banner";
                    amzn_assoc_marketplace = "amazon";
                    amzn_assoc_region = "US";
                    amzn_assoc_placement = "assoc_banner_placement_default";
                    amzn_assoc_campaigns = "software";
                    amzn_assoc_banner_type = "category";
                    amzn_assoc_p = "14";
                    amzn_assoc_isresponsive = "false";
                    amzn_assoc_banner_id = "1DXZZEJ8X4XD42VS1AR2";
                    amzn_assoc_width = "160";
                    amzn_assoc_height = "600";
                    amzn_assoc_tracking_id = "connectme-uml-20";
                    amzn_assoc_linkid = "43d09240c7059cc72ef8bdac3dd5924b";
                </script>
                <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
            </center>
            ';
            break;

        case 2: // Best Selling in Computer Security Software
            echo '
            <center>
                <script type="text/javascript">
                    amzn_assoc_ad_type = "banner";
                    amzn_assoc_marketplace = "amazon";
                    amzn_assoc_region = "US";
                    amzn_assoc_placement = "assoc_banner_placement_default";
                    amzn_assoc_campaigns = "software";
                    amzn_assoc_banner_type = "category";
                    amzn_assoc_p = "14";
                    amzn_assoc_isresponsive = "false";
                    amzn_assoc_banner_id = "08JWPP63G8DAJSRQ3Q02";
                    amzn_assoc_width = "160";
                    amzn_assoc_height = "600";
                    amzn_assoc_tracking_id = "connectme-uml-20";
                    amzn_assoc_linkid = "3af92717e50516647ea50bf630f0c91b";
                </script>
                <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
            </center>
            ';
            break;

        case 3: // Shop. Connect. Enjoy.
            echo '
            <center>
                <script type="text/javascript">
                amzn_assoc_ad_type = "banner";
                amzn_assoc_marketplace = "amazon";
                amzn_assoc_region = "US";
                amzn_assoc_placement = "assoc_banner_placement_default";
                amzn_assoc_banner_type = "ez";
                amzn_assoc_p = "14";
                amzn_assoc_width = "160";
                amzn_assoc_height = "600";
                amzn_assoc_tracking_id = "connectme-uml-20";
                amzn_assoc_linkid = "a0cfe5940cfe355747aded6a73da12ef";
                </script>
                <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
            </center>
            ';
            break;

        case 4: // Programmable search 

            $searchTerms = [
                "java programming", 
                "python programming", 
                "ruby programming", 
                "keyboard", 
                "mouse", 
                "headphones",
                "phone case", 
                "tablet", 
                "video game", 
                "GUI", 
                "gaming chair", 
                "jquery",
            ];
            
            $searhTerm = $searchTerms[rand(0,count($searchTerms) - 1)];
            echo '
            <script type="text/javascript">
                amzn_assoc_placement = "adunit0";
                amzn_assoc_search_bar = "false";
                amzn_assoc_tracking_id = "connectme-uml-20";
                amzn_assoc_search_bar_position = "bottom";
                amzn_assoc_ad_mode = "search";
                amzn_assoc_ad_type = "smart";
                amzn_assoc_marketplace = "amazon";
                amzn_assoc_region = "US";
                amzn_assoc_title = "Shop Related Products";
                amzn_assoc_default_search_phrase = "' . $searhTerm . '";
                amzn_assoc_default_category = "All";
                amzn_assoc_linkid = "277a4f53a7b24b34fc687a50b6b28f69";
            </script>
            <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
            ';
            break;

        case 5: // Amazon Prime Video
            echo '
            <center>
                <script type="text/javascript">
                    amzn_assoc_ad_type = "banner";
                    amzn_assoc_marketplace = "amazon";
                    amzn_assoc_region = "US";
                    amzn_assoc_placement = "assoc_banner_placement_default";
                    amzn_assoc_campaigns = "primevideo";
                    amzn_assoc_banner_type = "category";
                    amzn_assoc_p = "14";
                    amzn_assoc_isresponsive = "false";
                    amzn_assoc_banner_id = "1XBD06H7J758M69D85G2";
                    amzn_assoc_width = "160";
                    amzn_assoc_height = "600";
                    amzn_assoc_tracking_id = "connectme-uml-20";
                    amzn_assoc_linkid = "6abada0b113796fcd4ca972939dd9e76";
                </script>
                <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
            </center>
            ';
            break;

            case 6: // All-New Eero 6 And Pro 6
                echo '
                <center>
                    <script type="text/javascript">
                        amzn_assoc_ad_type = "banner";
                        amzn_assoc_marketplace = "amazon";
                        amzn_assoc_region = "US";
                        amzn_assoc_placement = "assoc_banner_placement_default";
                        amzn_assoc_campaigns = "eero6";
                        amzn_assoc_banner_type = "category";
                        amzn_assoc_p = "14";
                        amzn_assoc_isresponsive = "false";
                        amzn_assoc_banner_id = "0RKT89NBA89JA3F88KR2";
                        amzn_assoc_width = "160";
                        amzn_assoc_height = "600";
                        amzn_assoc_tracking_id = "connectme-uml-20";
                        amzn_assoc_linkid = "dc805bede6e61d79aa851222fcff4983";
                    </script>
                    <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
                </center>
                ';
                break;

            case 7:
                echo '
                <center>
                    <script type="text/javascript">
                        amzn_assoc_ad_type = "banner";
                        amzn_assoc_marketplace = "amazon";
                        amzn_assoc_region = "US";
                        amzn_assoc_placement = "assoc_banner_placement_default";
                        amzn_assoc_campaigns = "amz_music";
                        amzn_assoc_banner_type = "category";
                        amzn_assoc_p = "14";
                        amzn_assoc_isresponsive = "false";
                        amzn_assoc_banner_id = "0YAA9XDH3BAAV71Z4502";
                        amzn_assoc_width = "160";
                        amzn_assoc_height = "600";
                        amzn_assoc_tracking_id = "josephcalles-20";
                        amzn_assoc_linkid = "313d3ccc4c329b25d29ac977402b23a6";
                    </script>
                    <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
                </center>
                ';
                break;
    }
}

?>