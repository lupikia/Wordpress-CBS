<div class="wpsisac-image-slide">	<div class="wpsisac-slide-wrap" <?php echo $slider_height_css ; ?>>			<?php $sliderurl = get_post_meta( get_the_ID(),'wpsisac_slide_link', true );			if($sliderurl != '') { ?>			<a href="<?php echo esc_url($sliderurl); ?>"><img <?php if($lazyload) { ?>data-lazy="<?php echo esc_url($slider_img); ?>" <?php } ?> src="<?php if(empty($lazyload)) { echo esc_url($slider_img); } ?>" alt="<?php the_title(); ?>" /></a>			<?php } else {  ?>			<img  <?php if($lazyload) { ?>data-lazy="<?php echo esc_url($slider_img); ?>" <?php } ?> src="<?php if(empty($lazyload)) { echo esc_url($slider_img); } ?>"  alt="<?php the_title(); ?>" />		<?php } ?>	</div></div>