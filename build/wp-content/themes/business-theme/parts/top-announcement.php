<?php if (nimbus_get_option('nimbus_example_content') == "on") $default_data = true; else $default_data = false; ?>
<?php $announcement = nimbus_get_option('nimbus_announcement_1', $default_data); ?>
<?php if($announcement != '') { ?>
<div id="notification-top" class="notification-info collapse in">
    <div class="container">
    <button type="button" class="close" data-toggle="collapse" data-target="#notification-top"><i class="fa fa-times-circle"></i></button>
    <?php echo $announcement ?>
    </div>
</div>
<?php } ?>