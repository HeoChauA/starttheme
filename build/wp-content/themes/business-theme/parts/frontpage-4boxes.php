<?php
if ( nimbus_get_option('toggle_featured_pages') == "show" ) {
    $boxes_options = array( 'nimbus_4boxes_1_icon'=>'nimbus_4boxes_1', 
                            'nimbus_4boxes_2_icon'=>'nimbus_4boxes_2', 
                            'nimbus_4boxes_3_icon'=>'nimbus_4boxes_3', 
                            'nimbus_4boxes_4_icon'=>'nimbus_4boxes_4');

    $i=0;
    foreach($boxes_options as $k=>$o){
        $v = nimbus_get_option($o);
        $post = get_post($v); 
        if (is_home()) {
            $content = chop_string(get_post_field( 'post_content', get_option( 'page_for_posts' ) ));
        } else {
            $content = chop_string($post->post_content); 
        }
        $boxes[$i]['title'] = $post->post_title;
        $boxes[$i]['content'] = $content;
        $boxes[$i]['icon'] = nimbus_get_option($k);
        $boxes[$i]['link'] = get_permalink($v);
        $i++;
    }
    ?>

    <?php global $nimbus_4boxes_bg_color; ?>
    <section class="<?php echo $nimbus_4boxes_bg_color ?>" id="home_4boxes">
        <div class="container box-iconed">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                    <?php for($i=0;$i<2;$i++) { ?>
                        <div class="col-sm-6">
                            <div class="image"><a href="<?php echo $boxes[$i]['link']; ?>"><i class="fa <?php echo $boxes[$i]['icon'] ?>"></i></a></div>
                            <div class="desc">
                                <h3><a href="<?php echo $boxes[$i]['link']; ?>"><?php echo $boxes[$i]['title'] ?></a></h3>
                                <?php 
                                echo $boxes[$i]['content']; 
                                if (!empty($boxes[$i]['content'])) {
                                ?>
                                <p><a href="<?php echo $boxes[$i]['link']; ?>" class="read-more">Read More <i class="fa fa-long-arrow-right"></i></a></p>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                    <?php for($i=2;$i<count($boxes);$i++) { ?>
                        <div class="col-sm-6">
                            <div class="image"><a href="<?php echo $boxes[$i]['link']; ?>"><i class="fa <?php echo $boxes[$i]['icon'] ?>"></i></a></div>
                            <div class="desc">
                                <h3><a href="<?php echo $boxes[$i]['link']; ?>"><?php echo $boxes[$i]['title'] ?></a></h3>
                                <?php 
                                echo $boxes[$i]['content']; 
                                if (!empty($boxes[$i]['content'])) {
                                ?>
                                <p><a href="<?php echo $boxes[$i]['link']; ?>" class="read-more">Read More <i class="fa fa-long-arrow-right"></i></a></p>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>