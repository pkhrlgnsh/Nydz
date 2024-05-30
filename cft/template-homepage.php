<?php
/**
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header() ?>
<section style="text-align: center;">
	<div class="container-fluid" style="background: #FFFFF; height: 170px;">
		<div class="column">
			<div class="col-12">
				<h1 class="display-4">Jobs in Europe</h1>
			</div>
		</div>
	</div>
</section>

    <div class="feature-posts">
    <a href="single-post.html" class="feature-post-item">                       
    <span style="font-size: 22px;">Featured Posts</span>
</a>

        <?php
        // WP_Query arguments
        $args = array(
            'category_name' => 'featured',
            'posts_per_page' => -1 // Set to -1 to display all posts in the "featured" category
        );

        // The Query
        $featured_posts_query = new WP_Query($args);

        // The Loop
        if ($featured_posts_query->have_posts()) :
            while ($featured_posts_query->have_posts()) : $featured_posts_query->the_post();
        ?>
                <a href="<?php echo esc_url(get_permalink()); ?>" class="feature-post-item">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" class="w-100" alt="">
                    <div class="feature-post-caption"><?php the_title(); ?></div>
                </a>
        <?php
            endwhile;
            wp_reset_postdata(); // Reset Post Data
        else :
            // If no posts found
            echo 'No posts found in the "featured" category.';
        endif;
        ?>
    </div>
</section>
        <hr>
        <div class="page-container">
            <div class="page-content">
                
            <div class="card">
    <?php
    // WP_Query arguments to retrieve the latest post
    $latest_post_args = array(
        'posts_per_page' => 1, // Retrieve only one post
        'orderby' => 'date',
        'order' => 'DESC' // Get the latest post
    );

    // The Query
    $latest_post_query = new WP_Query($latest_post_args);

    // The Loop
    if ($latest_post_query->have_posts()) :
        while ($latest_post_query->have_posts()) : $latest_post_query->the_post();
    ?>
            <div class="card-header text-center">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <small class="small text-muted"><?php echo get_the_date(); ?> 
                    <span class="px-2">-</span>
                    <a href="<?php echo esc_url(get_comments_link()); ?>" class="text-muted"><?php echo get_comments_number(); ?> Comments</a>
                </small>
            </div>
            <div class="card-body">
                <div class="blog-media">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" alt="" class="w-100">
                    <?php
                    $post_categories = get_the_category();
                    if (!empty($post_categories)) {
                        echo '<a href="' . esc_url(get_category_link($post_categories[0]->term_id)) . '" class="badge badge-primary">' . esc_html($post_categories[0]->name) . '</a>';
                    }
                    ?>
                </div>
                <p class="my-3"><?php echo get_the_excerpt(); ?></p>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center flex-basis-0">
                <button class="btn btn-primary circle-35 mr-4"><i class="ti-back-right"></i></button>
                <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-outline-dark btn-sm">READ MORE</a>
                <a href="#" class="text-dark small text-muted">By : <?php the_author(); ?></a>
            </div>
    <?php
        endwhile;
        wp_reset_postdata(); // Reset Post Data
    else :
        // If no posts found
        echo 'No posts found.';
    endif;
    ?>
</div>
                <hr>
                <div class="row">
                <?php
// WP_Query arguments to retrieve the latest post
$latest_post_args = array(
    'posts_per_page' => 6, // Retrieve 6 posts
    'orderby' => 'date',
    'order' => 'DESC', // Get the latest post
    'offset' => 1 // Skip the first post
);


// The Query
$latest_post_query = new WP_Query($latest_post_args);

// The Loop
if ($latest_post_query->have_posts()) :
    while ($latest_post_query->have_posts()) : $latest_post_query->the_post();
?>
 
        <div class="col-lg-6">
            <div class="card text-center mb-5">
                <div class="card-header p-0">
                    <div class="blog-media">
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" alt="" class="w-100">
                        <?php
                        $post_categories = get_the_category();
                        if (!empty($post_categories)) {
                            echo '<a href="' . esc_url(get_category_link($post_categories[0]->term_id)) . '" class="badge badge-primary">' . esc_html($post_categories[0]->name) . '</a>';
                        }
                        ?>
                    </div>
                </div>
                <div class="card-body px-0">
                    <h5 class="card-title mb-2"><?php the_title(); ?></h5>
                    <small class="small text-muted"><?php echo get_the_date(); ?> 
                        <span class="px-2">-</span>
                        <a href="<?php echo esc_url(get_comments_link()); ?>" class="text-muted"><?php echo get_comments_number(); ?> Comments</a>
                    </small>
                    <p class="my-2"><?php echo get_the_excerpt(); ?></p>
                </div>
                <div class="card-footer p-0 text-center">
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-outline-dark btn-sm">READ MORE</a>
                    <a href="#" class="text-dark small text-muted">By : <?php the_author(); ?></a>
                </div>
            </div>
        </div>
    
<?php
    endwhile;
    wp_reset_postdata(); // Reset Post Data
else :
    // If no posts found
    echo 'No posts found.';
endif;
?>
</div>
<button class="btn btn-primary btn-block my-4" style="width: 200px; font-size: 16px; margin: auto;">Load More Posts</button>            


            </div>

            <!-- Sidebar -->
            <div class="page-sidebar text-center">
                <h4 class="sidebar-title section-title mb-4 mt-3">About</h4>
                <img src="http://localhost/jobsfungi/wp-content/uploads/2024/05/Artboard_1_copy-removebg-preview.png" alt="" class="circle-100 mb-3">
                <div class="socials mb-3 mt-2">
                    <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                    <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                                   </div>
                <p>Consectetur adipisicing elit Possimus tempore facilis dolorum veniam impedit nobis. Quia, soluta incidunt nesciunt dolorem reiciendis iusto.</p>
                

                <h4 class="sidebar-title mt-5 mb-4">Subscribe Us To Get Newsletter</h4>
                <form action="">
                    <div class="subscribe-wrapper">
                        <input type="email" class="form-control" placeholder="Email Address">
                        <button type="submit" class="btn btn-primary"><i class="ti-location-arrow"></i></button>
                    </div>
                </form>

                <?php
// Array of tags
$tags = array("Light Driver Jobs", "Heavy Driver Jobs", "Agriculture Jobs", "Waiter & Waitress Jobs", "Care Giver Jobs");
?>

<h6 class="sidebar-title mt-5 mb-4">Tags</h6>

<?php
// Loop through the tags array and generate HTML for each tag
foreach ($tags as $tag) {
    echo '<a href="javascript:void(0)" class="badge badge-primary m-1 p-2">' . $tag . '</a>';
}
?>

                <div class="row">
    <div class="col-md-4">
        <h5 class="sidebar-title mt-5 mb-4">Instagram</h5>
    </div>
    <div class="col-md-4">
        <h5 class="sidebar-title mt-5 mb-4">Facebook</h5>
    </div>
    <div class="col-md-4">
        <h5 class="sidebar-title mt-5 mb-4">Twitter</h5>
    </div>
</div>
               
                               <h4 class="sidebar-title mt-5 mb-4">Popular Posts</h4>
                <div class="card mb-4">
                    <a href="single-post.html" class="overlay-link"></a>
                    <div class="card-header p-0">                                   
                        
                    </div>
                       
                </div>

                        <?php
        // WP_Query arguments
        $args = array(
            'category_name' => 'popular',
            'posts_per_page' => -1 // Set to -1 to display all posts in the "featured" category
        );

        // The Query
        $popular_posts_query = new WP_Query($args);

        // The Loop
        if ($popular_posts_query->have_posts()) :
            while ($popular_posts_query->have_posts()) : $popular_posts_query->the_post();
        ?>
                <a href="<?php echo esc_url(get_permalink()); ?>" class="popular-post-item">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" class="w-100" alt="">
                    <div class="popular-post-caption" style="color: black; font-size: 18px;">
    <?php the_title(); ?>
</div>

                </a>
        <?php
            endwhile;
            wp_reset_postdata(); // Reset Post Data
        else :
            // If no posts found
            echo 'No posts found in the "featured" category.';
        endif;
        ?>
    </div>
                <div class="ad-card d-flex text-center align-items-center justify-content-center">
                    <span href="#" class="font-weight-bold">ADS</span>
                </div>
            </div>
        </div>
    </div>
    
    <section class="recent-blog-posts">
    <div class="container">
        <h2 class="section-title text-center mb-4" style="color: black;">Recent Blog Posts</h2>
        <div class="row">
            <?php
            // WP_Query arguments to retrieve recent blog posts
            $blog_post_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3 // Display the latest 3 blog posts
            );

            // The Query
            $blog_post_query = new WP_Query($blog_post_args);

            // The Loop
            if ($blog_post_query->have_posts()) :
                while ($blog_post_query->have_posts()) : $blog_post_query->the_post();
            ?>
                    <div class="col-md-4">
                        <div class="blog-post">
                            <div class="blog-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="<?php the_permalink(); ?>" style="color: black;"><?php the_title(); ?></a></h3>
                                <p class="blog-excerpt" style="color: black;"><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more" style="color: black;">Read more</a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset Post Data
            else :
                // If no blog posts found
                echo '<div class="col-md-12">No recent blog posts found.</div>';
            endif;
            ?>
        </div>
    </div>
</section>
<section class="why-choose-us-section">
    <div class="container">
        <h2 class="section-title text-center mb-4">Why Choose Us?</h2>
        <div class="row">
            <div class="col-md-4">
                <h3 class="reason-title">Quality Jobs</h3>
                <p class="reason-description">We offer a wide range of high-quality job opportunities in Europe.</p>
            </div>
            <div class="col-md-4">
                <h3 class="reason-title">Expertise</h3>
                <p class="reason-description">Our team consists of experts in recruitment and job placement.</p>
            </div>
            <div class="col-md-4">
                <h3 class="reason-title">Customer Satisfaction</h3>
                <p class="reason-description">We prioritize customer satisfaction and strive to meet your needs.</p>
            </div>
        </div>
    </div>
</section>
    
    <?php 
get_footer();
?>
