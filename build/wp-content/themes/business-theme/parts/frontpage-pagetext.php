<?php 
if ( nimbus_get_option('toggle_p_content') == "show" ) {
    global $nimbus_pagetext_bg_color;
    if ( 'posts' == get_option( 'show_on_front' ) ) {
    ?>
        <section class="<?php echo $nimbus_pagetext_bg_color ?>" id="home_pagetext">
            <div class="container">
                <h2 class="heading-2"><span><?php the_title(); ?></span></h2> 
            </div>    
                <?php    
                get_template_part( 'parts/loop');
                ?>

        </section>
    <?php
    } else {
        ?>
        <section class="<?php echo $nimbus_pagetext_bg_color ?>" id="home_pagetext">
            <div class="container" id="page-<?php the_ID(); ?>">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>   
                        <h2 class="heading-2"><span><?php the_title(); ?></span></h2>    
                        <?php 
                        the_content(); 
                    }
                } else {
                        get_template_part( 'parts/error', 'no_results');
                }
                ?>   
            </div>
        </section>
    <?php
    }
}
?>






