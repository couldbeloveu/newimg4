<?php 
get_header();

if( !have_posts() ){
	get_template_part( 'content-404' ); 
	get_footer();
	exit;
}
?>

<section class="container">
	<div class="content-wrap">
		<div class="content">
			<?php _the_ads($name='ads_search_01', $class='orbui-search orbui-search-01') ?>
			<div class="pagetitle"><h1><?php echo htmlspecialchars($s); ?> 的搜索结果</h1></div>
			<?php 
				get_template_part( 'excerpt' ); 
				_moloader('mo_paging');
				wp_reset_query();
			?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>