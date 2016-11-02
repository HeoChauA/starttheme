<div id="footers">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="foot-widget" id="footer_box_1">
                <?php if (is_active_sidebar( 'footer_box_1' )) { ?>
                    <?php dynamic_sidebar( 'footer_box_1' ); ?>
                <?php } else if (nimbus_get_option('nimbus_example_content') == "on") { ?>
                    <h3 class="head-foot-widget"><span><?php echo nimbus_get_sample_content('h1'); ?></span></h3>
                    <p><?php echo chop_string(nimbus_get_sample_content('p'),200); ?></p>
                <?php } ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="foot-widget" id="footer_box_2">
                <?php if (is_active_sidebar( 'footer_box_2' )) { ?>
                    <?php dynamic_sidebar( 'footer_box_2' ); ?>
                <?php } else if (nimbus_get_option('nimbus_example_content') == "on") { ?>
                    <h3 class="head-foot-widget"><span><?php echo nimbus_get_sample_content('h1'); ?></span></h3>
                    <p><?php echo chop_string(nimbus_get_sample_content('p'),300); ?></p>
                <?php } ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="foot-widget" id="footer_box_3">
                <?php if (is_active_sidebar( 'footer_box_3' )) { ?>
                    <?php dynamic_sidebar( 'footer_box_3' ); ?>
                <?php } else if (nimbus_get_option('nimbus_example_content') == "on") { ?>
                    <h3 class="head-foot-widget"><span><?php echo nimbus_get_sample_content('h1'); ?></span></h3>
                    <p><?php echo chop_string(nimbus_get_sample_content('p'), 300); ?></p>
                <?php } ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="foot-widget" id="footer_box_4">
                <?php if (is_active_sidebar( 'footer_box_4' )) { ?>
                    <?php dynamic_sidebar( 'footer_box_4' ); ?>
                <?php } else if (nimbus_get_option('nimbus_example_content') == "on") { ?>
                    <h3 class="head-foot-widget"><span><?php echo nimbus_get_sample_content('h1'); ?></span></h3>
                    <p><?php echo chop_string(nimbus_get_sample_content('p'), 200); ?></p>
                <?php } ?>
                </div>
            </div>
        </div>
        <div class="copyright row">
            <div class="col-sm-6 text-left;"><?php echo nimbus_get_option('copyright') ?></div> 
            <div class="col-sm-6 text-right"><a href="http://www.nimbusthemes.com/wordpress-themes/business/">Business Theme</a> powered by <a href="http://wordpress.org/">WordPress</a></div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>