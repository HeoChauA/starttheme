<?php

if (!is_paged()) {
    $banner_option = nimbus_get_option('nimbus_banner_option');
    $nimbus_banner_and_content = nimbus_get_option('nimbus_banner_and_content');
    if ($banner_option == 'image_content_width') { 
        if (empty($nimbus_banner_and_content) && (nimbus_get_option('nimbus_example_content') == 'on')) {
            $nimbus_banner_and_content = get_template_directory_uri() . '/assets/img/preview/1450x430.jpg';
        }
    ?>
        <div class="static_banner_wrap" style="background:url('<?php echo $nimbus_banner_and_content; ?>') no-repeat center center; ">
            <div class="container">
                <?php
                echo nimbus_get_option('nimbus_banner_content');
                ?>
            </div>
       </div>
    <?php 
    // Content width slideshow
    } else if ($banner_option == 'slideshow') { 
        $type = 'slide';
        $args=array(
            'post_type' => $type,
            'post_status' => 'publish',
            'posts_per_page' => -1
        );
        $custom_query = null;
        $custom_query = new WP_Query($args);
        while ($custom_query->have_posts()) : $custom_query->the_post();  
        $post_id = get_the_ID();  
        //$nimbus_slide_heading_color_default = nimbus_get_option('nimbus_slideshow_heading_style')['color'];
        $nimbus_slide_heading_color = get_post_meta(get_the_ID(),'nimbus_slide_heading_color',TRUE);
        $nimbus_slide_heading_color = $nimbus_slide_heading_color  == '' ? '000000' : $nimbus_slide_heading_color ;
        $nimbus_slide_text_background_color = get_post_meta(get_the_ID(),'nimbus_slide_text_background_color',TRUE);
        //$nimbus_slide_text_background_color = $nimbus_slide_text_background_color  == '#ffffff' ? '' : $nimbus_slide_text_background_color ;
        $colour = substr( $nimbus_slide_text_background_color, 1 );
        if ( strlen( $colour ) == 6 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
        } elseif ( strlen( $colour ) == 3 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
        } else {
            $r = 0;
            $g = 0;
            $b = 0;
        }
        $r = hexdec( $r );
        $g = hexdec( $g );
        $b = hexdec( $b );
        
        $nimbus_slideshow_interval = nimbus_get_option('nimbus_slideshow_interval');
        $nimbus_slideshow_pause = nimbus_get_option('nimbus_slideshow_pause');
        $nimbus_slideshow_wrap = nimbus_get_option('nimbus_slideshow_wrap');
        ?>
        <style>
        
        #slideshow .headline-<?php echo $post_id ?>{color:<?php echo $nimbus_slide_heading_color ?>;}
        #slideshow .sub-headline-<?php echo $post_id ?>{color:<?php echo $nimbus_slide_heading_color ?>;}
        #slideshow .descriptions-<?php echo $post_id ?>{color:<?php echo $nimbus_slide_heading_color ?>;background:<?php echo $nimbus_slide_text_background_color ?>;background: rgba(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>, 0.7);}
        </style>
        <?php endwhile; ?>
        <?php
        if( $custom_query->have_posts() ) {
        
        ?>
        <div id="slideshow" class="carousel slide" data-ride="carousel" data-interval="<?php echo $nimbus_slideshow_interval*1000 ?>" data-pause="<?php echo $nimbus_slideshow_pause ?>" data-wrap=<?php echo $nimbus_slideshow_wrap ?>>
            <div class="carousel-inner">
            <?php
            $i=0;
            while ($custom_query->have_posts()) : $custom_query->the_post(); 
            $post_id = get_the_ID(); 
            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
            $nimbus_slide_sub_heading = get_post_meta(get_the_ID(), 'nimbus_slide_sub_heading', TRUE);
            ?>
            <div class="item <?php if($i==0){ ?>active <?php } ?>" id="slide-<?php echo $post_id ?>" style="background-image:url(<?php echo $featured_image ?>);">
                <div class="carousel-caption-text">
                    <div class="container">
                        <div class="slide_h1_wrap"><h1 class="headline headline-<?php echo $post_id ?>"><?php the_title(); ?></h1></div>
                        <div class="slide_h3_wrap"><h3 class="sub-headline sub-headline-<?php echo $post_id ?>"><?php echo $nimbus_slide_sub_heading ?></h3></div>
                        <?php 
                        $thecontent = get_the_content();
                        if(!empty($thecontent)) {
                        ?>
                            <div class="descriptions descriptions-<?php echo $post_id ?>"><?php the_content(); ?></div>
                        <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php 
            unset($nimbus_slide_sub_heading);
            $i++;
            endwhile; 
            ?>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <?php for($j=0;$j<$i;$j++) { ?>
                <li data-target="#slideshow" data-slide-to="<?php echo $j ?>" <?php if($j==0){?>class="active"<?php } ?>></li>
            <?php } ?>
            </ol>
        </div><!-- /.carousel -->
        <?php } else if(nimbus_get_option('nimbus_example_content') == "on"){ 
        }
    // Content only, no banner
    } else if ($banner_option == 'content_only') {
    ?>
        <div class="container">
            <?php
            echo nimbus_get_option('nimbus_banner_content_only');
            ?>
        </div>
    <?php   
    }
}
?>