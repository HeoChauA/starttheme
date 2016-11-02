<?php
if ( nimbus_get_option('toggle_logos') == "show" ) {
    for($i=1;$i<=10;$i++) 
        $partners_options[] = array('nimbus_partner_'.$i.'_logo', 'nimbus_partner_'.$i.'_link');

    $i=0;
    if (nimbus_get_option('nimbus_example_content') == "on") $default_data = true; else $default_data = false;
    foreach($partners_options as $arr){
        $partners[$i]['logo'] = nimbus_get_option($arr[0], $default_data);
        $partners[$i]['link'] = nimbus_get_option($arr[1], $default_data);
        $i++;
    }

    #check if at least one partner logo defined
    $show_partners = false;
    foreach($partners as $arr){
        if($arr['logo'] != ''){$show_partners = true; break;}
    }
    ?>

    <?php global $nimbus_partners_bg_color; ?>
    <?php if($show_partners) { ?>
    <section class="<?php echo $nimbus_partners_bg_color ?>" id="home_partners">
        <div class="container">
            <h2 class="heading-2"><span><?php echo nimbus_get_option('nimbus_partners_heading'); ?></span></h2>
            <div class="our-clients">
                <?php for($i=0;$i<count($partners);$i++){ ?>
                <?php if($partners[$i]['logo'] == '') continue; ?>
                <a href="<?php echo $partners[$i]['link'] ?>"><img src="<?php echo $partners[$i]['logo'] ?>" /></a>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php } 
}
?>