<?php
$social_type = array("fa-linkedin" => "nimbus_linkedin_url", "fa-youtube" => "nimbus_youtube_url", "fa-vimeo-square" => "nimbus_vimeo_url", "fa-flickr" => "nimbus_flickr_url", "fa-wordpress" => "nimbus_wpcom_url", "fa-pinterest-square" => "nimbus_pinterest_url", "fa-instagram" => "nimbus_instagram_url", "fa-tumblr" => "nimbus_tumblr_url");
?>
<div id="page-top">
    <div class="container">
        <?php if(nimbus_get_option('public_phone') != '' || nimbus_get_option('public_email') != '') { ?>
        <ul class="left-page-top">
            <?php if(nimbus_get_option('public_phone')) { ?><li><?php echo nimbus_get_option('public_phone') ?></li> <?php } ?>
            <?php if(nimbus_get_option('public_email')) { ?><li><a href="mailto:<?php echo nimbus_get_option('public_email') ?>"><b><?php echo nimbus_get_option('public_email') ?></b></a></li><?php } ?>
        </ul>
        <?php } ?>
        <ul class="right-page-top">
        <?php if (nimbus_get_option('nimbus_display_social_buttons') == "1") { ?>
        <li>
            <div class="social-page-top">
                <?php 
                foreach ($social_type as $key => $id) {
                    $$id = trim(nimbus_get_option($id));
                    $mailto = ($key == 'fa-envelope') ? 'mailto:' : '';
                    if (empty($$id)) {
                        if (nimbus_get_option('nimbus_example_content') == "on") {
                            $id = "#";
                        } else {
                            $id = "";
                        }
                    } else {
                        $id = $$id;
                    }
                    if (!empty($id)) {
                    ?>
                        <a href="<?php echo $mailto; ?><?php echo $id; ?>"><i class="fa <?php echo $key; ?>"></i></a>
                    <?php
                    }
                }
                if (nimbus_get_option('nimbus_hide_rss_icon') == 0) {
                ?>
                    <a href="<?php echo get_bloginfo('rss2_url'); ?>"><i class="fa fa-rss"></i></a>
                <?php
                }
                ?>
            </div>
        </li>
        <?php } ?>
        <li id="toggle-top-2">
            <form action="<?php echo home_url( '/' ); ?>" name="form-search" class="f-search-top" method="get">
                <input type="text" name="s" class="input-search" placeholder="Search" />
            </form>
        </li>
        <li><a href="#" onclick="jQuery('#toggle-top-2').toggleClass('open');"><i class="fa fa-search"></i></a></li>
        </ul>
    </div>
</div>