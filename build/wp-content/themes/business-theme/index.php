<?php
get_header();
get_template_part('parts/blog', 'title');
?>
<section class="white-bg">
<?php
if (is_404()){
	get_template_part('parts/404');
} else if (is_archive() || is_home() || is_search()) {
    get_template_part( 'parts/loop');
}
?>
</section>
<?php
get_footer(); 
?>