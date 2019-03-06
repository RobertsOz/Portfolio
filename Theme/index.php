<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1 class="Work">Work</h1>

			<!-- nav -->
					<nav class="menu" role="navigation">
						
						<?php 
						try {
							$menu = wp_get_nav_menu_items('WorkMenu');
							echo '<ul>';
							foreach($menu as $item){
								$thumb_id = get_post_thumbnail_id($item->ID);
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
								$thumb_url = $thumb_url_array[0];
								echo '<li style=" background-image: url(',$thumb_id,')">';
								echo '<a href="',$item->url,'">', $item->title,'</a></li>';
								echo '</li>';
							}
							echo '</ul>';
						}
						catch(Exception $e){
							echo 'Caught exception: ',  $e->getMessage(), '\n';
						}

						?>
					</nav>
			<!-- /nav -->

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
