<?php
/**
 * Displays the content when the cover template is used.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

global $settings;
?>

<article class="service" id="post-<?php the_ID(); ?>">
	<?php
	// On the cover page template, output the cover header.
	$cover_header_style   = '';
	$cover_header_classes = '';

	$color_overlay_style   = '';
	$color_overlay_classes = '';

	$image_url = ! post_password_required() ? get_the_post_thumbnail_url( get_the_ID(), 'twentytwenty-fullscreen' ) : '';

	if ( $image_url ) {
		$cover_header_style   = ' style="background-image: url( ' . esc_url( $image_url ) . ' );"';
		$cover_header_classes = ' bg-image';
	}

	// Get the color used for the color overlay.
	$color_overlay_color = get_theme_mod( 'cover_template_overlay_background_color' );
	if ( $color_overlay_color ) {
		$color_overlay_style = ' style="color: ' . esc_attr( $color_overlay_color ) . ';"';
	} else {
		$color_overlay_style = '';
	}

	// Get the fixed background attachment option.
	if ( get_theme_mod( 'cover_template_fixed_background', true ) ) {
		$cover_header_classes .= ' bg-attachment-fixed';
	}

	// Get the opacity of the color overlay.
	$color_overlay_opacity  = get_theme_mod( 'cover_template_overlay_opacity' );
	$color_overlay_opacity  = ( false === $color_overlay_opacity ) ? 80 : $color_overlay_opacity;
	$color_overlay_classes .= ' opacity-' . $color_overlay_opacity;
	?>

	<div class="cover-header <?php echo $cover_header_classes; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
		<div class="cover-header-inner-wrapper screen-height">
			<div class="slide-cover" <?php echo $cover_header_style; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>>


				<?php
				if ( has_excerpt() && $settings["support-box"] ) {
				?>

				<div class="introduction-block">
					<div class="intro-title">
						<h1> <?php the_title(); ?> </h1>
					</div>
					<div class="intro-body">
						<?php  the_excerpt(); ?>
					</div>
				</div>

				<?php
				}?>

			</div>
		</div><!-- .cover-header-inner-wrapper -->
	</div><!-- .cover-header -->
	<div class="post-inner" id="post-inner">
		<div class="entry-content">
			<?php
			if($settings["content-title"])
			{?>
					<h1> <?php the_title(); ?> </h1>

			<?php }

			if($settings["type"]=="news"){
			?>

				<div class="content-service">
					<div class="content-service-block main-content">

						<h1>  <?php echo get_the_title(); ?></h1>
						<?php

							the_post();
							the_content();
						?>
					</div>
					<div class="content-service-block sidebar-posts">
						<h3>  <?php echo  block_field( 'post_title',false ); ?></h3>
						<?php

						$limit=block_field( 'number',false );
						$category=block_field( 'category',false );
						$order_date="ASC";

						if(block_field( 'order_date',false )=="DESC"){
						$order_date="DESC";
						}
						//echo "the order_date" .$order_date . "string length ". strlen($order_date);
						// the query
						$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>$limit,"order" => $order_date,"category_name" => $category));


				if ( $wpb_all_query->have_posts() ) { ?>

					<ul>
						<!-- the loop -->
						<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

							<li class="post-vertical-item">

									<a  href="<?php echo get_permalink() ?>" class="case-title"><?php the_title();  ?></a>
							</li>
						<?php endwhile; ?>
					</ul>

				<?php }?>

			<?php
			}else{


				if(have_posts()){
					while ( have_posts() ) {
						the_post();
						the_content();
					}
				}

			}

		?>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
</article><!-- .post -->
