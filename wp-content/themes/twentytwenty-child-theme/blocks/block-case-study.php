<?php

$case_number=block_field( 'case_number',false );
$order_date="ASC";

if(block_field( 'order_date',false )=="DESC"){
    $order_date="DESC";
}
//echo "the order_date" .$order_date . "string length ". strlen($order_date);
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>$case_number,"order" => $order_date));


if ( $wpb_all_query->have_posts() ) : ?>

        <!-- the loop -->
        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <?php
//        echo "the ID" .get_the_ID();
//        echo "the url". get_the_post_thumbnail_url(get_the_ID(),'full')
        ?>
        <a href="<?php the_permalink(); ?>" class="case-item">
            <div class="case">
                <div class="case-paragraph"><?php the_excerpt();?>

                    <div class="case-pointer">
                        <span></span>
                    </div>
                </div>
                <div class="case-body">
                    <img class="case-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>" alt="<?php block_field( 'title' ); ?>" />
                    <div class="case-info">
                        <h6 class="case-title"><?php the_title();  ?></h6>
                        <p class="case-supporting-text"><?php echo  get_the_date(); ?></p>
                    </div>
                </div>

            </div>
        </a>
        <?php endwhile; ?>
        <!-- end of the loop -->
    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>