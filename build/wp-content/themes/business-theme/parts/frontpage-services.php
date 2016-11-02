<?php 
if ( nimbus_get_option('toggle_tabs') == "show" ) {
    for($i=1;$i<=4;$i++) 
        $services_options[] = array('nimbus_services_'.$i.'_title', 'nimbus_services_'.$i.'_icon', 'nimbus_services_'.$i.'_text');

    $i=0;
    foreach($services_options as $arr){
        $services[$i]['title'] = nimbus_get_option($arr[0]);
        $services[$i]['icon'] = nimbus_get_option($arr[1]);
        $services[$i]['text'] = nimbus_get_option($arr[2]);
        $i++;
    }

    #check if at least one partner logo defined
    $show_services = false;
    foreach($services as $arr){
        if($arr['title'] != ''){$show_services = true; break;}
    }
    ?>


    <?php global$nimbus_services_bg_color; ?>
    <?php if($show_services) { ?>
    <section class="<?php echo $nimbus_services_bg_color ?>" id="home_services">
        <div class="container our-services">
            <h2 class="heading"><span><?php echo nimbus_get_option('nimbus_services_heading'); ?></span></h2>
            <div class="our-services-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <?php for($i=0;$i<count($services);$i++){ ?>
                    <?php if($services[$i]['title'] == '' || $services[$i]['icon'] == '' || $services[$i]['text'] == '') continue; ?>
                    <li <?php if($i == 0) { ?>class="active"<?php } ?>><a href="#tab-pane-<?php echo $i?>" data-toggle="tab"><i class="fa <?php echo $services[$i]['icon'] ?>"></i><span><?php echo $services[$i]['title']; ?></span></a></li>
                    <?php } ?>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                <?php for($i=0;$i<count($services);$i++){ ?>
                <?php if($services[$i]['title'] == '' || $services[$i]['icon'] == '' || $services[$i]['text'] == '') continue; ?>
                    <div class="tab-pane <?php if($i == 0) { ?>active<?php } ?>" id="tab-pane-<?php echo $i ?>"><?php echo do_shortcode($services[$i]['text']); ?></div>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php } 
}
?>