<?php
/*
Template Name: HomePage
*/
get_header() ?>
<!-- Banner Section -->
<style>
    .banner_iomage_wraooper { 
        background-image: url('https://stagingjobseurope.fungiwonders.com/wp-content/uploads/2024/06/job-search-word-concepts-banner-vector-28884582.jpg'); 
        background-size: cover; 
        height: 35rem;
        display: flex;
        justify-content: center;
    }
    .banner_content_text{
        display: flex;
        align-items: flex-end;
        justify-content: center;
    
    }
    .text_post{
        padding-top: 10px;
        padding-bottom: px;
        font-size: 14px;
    }

    .button_hov {
        padding: 8px; /* Adjusted padding */
        background-color: #33A2FF !important;
        color: white;
        font-size: 14px;
        cursor: pointer;
        margin: auto;
    }
    .blog_titl_pd{
        padding-top: 10px;
        padding-bottom: 10px;
    
    }

    .button_hov:hover {
        background-color: orange !important;
        color: white !important;
    }
    .hov_col:hover {
        background-color: orange !important;
        color: white !important;
    }
    .cards_top{
        padding-top: 25px;
        padding-bottom: 25px;
    }
    .side_bar{
        padding-top: 25px;
        padding-bottom: 25px; 
    }
    .post_captions{
        background-color: #00000099;
    }
    .banner_content_texts{
        display: flex;
        align-items: flex-end;
        font-size: 3.5rem;
        background-color: #00000099;
        color: #ffff;
        justify-content: center;
        padding: 40px;
        margin-bottom: 0px;
    }
    .banners_sections{
        padding-bottom: 40px;
    }
    .features_posts{
        padding-bottom: 40px;
    }
    .banner_content_say{
        color: white;
    }
</style>
<section class="banner-section banners_sections" style="text-align: center;">
    <div class="container-fluid banner_iomage_wraooper">
        <div class="column banner_content_text">
            <div class="col-12 banner_content_texts">
                <h1 class="display-4 banner_content_say">"Welcome to Your European Career Portal"</h1>
            </div>
        </div>
    </div>
</section>
<div class="feature-posts features_posts">
    <a href="single-post.html" class="feature-post-item ">                       
        <span style="font-size: 22px;">Featured Posts</span>
    </a>

    <?php
    // WP_Query arguments
    $args = array(
        'category_name' => 'featured',
        'posts_per_page' => 4 // Set to -1 to display all posts in the "featured" category
    );

    // The Query
    $featured_posts_query = new WP_Query($args);

    // The Loop
    if ($featured_posts_query->have_posts()) :
        while ($featured_posts_query->have_posts()) : $featured_posts_query->the_post();
    ?>
            <a href="<?php echo esc_url(get_permalink()); ?>" class="feature-post-item">
                <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" class="w-100" alt="">
                <div class="feature-post-caption post_captions"><?php the_title(); ?></div>
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
    <div class="page-content ">
        <div class="card cards_top">
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
                        <h2 class="card-title"><?php the_title(); ?></h2>
                    </div>
                    <div class="card-body">
                        <div class="blog-media">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" alt="" class="card_image_content">
                        </div>
                        <p class="my-3 text_post"><?php echo get_the_excerpt(); ?></p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center flex-basis-0">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-outline-dark btn-sm button_hov">Read More</a>
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
                                <div class="blog-media blog_titl_pd">
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
                                <h3 class="card-title mb-2"><?php the_title(); ?></h3>
                                <p class="my-2 text_post"><?php echo get_the_excerpt(); ?></p>
                            </div>
                            <div class="card-footer p-0 text-center">
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-outline-dark btn-sm button_hov">Read More</a>
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
        <button class="btn btn-primary btn-block my-4 button_hov" style="width: 200px; font-size: 16px; margin: auto;">Load More Posts</button>            
    </div>

    <!-- Sidebar -->
    <div class="page-sidebar text-center side_bar">
        <h3 class="sidebar-title section-title mb-4 mt-3">About</h3>
        <img src="https://stagingjobseurope.fungiwonders.com/wp-content/uploads/2024/06/job-search-word-concepts-banner-vector-28884582.jpg" alt="" class="circle-100 mb-3">
        <div class="socials mb-3 mt-2">
            <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
            <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
        </div>
        <p>Welcome to Jobs in Europe, where your career dreams come to life. Discover a world of opportunities tailored to your skills and ambitions. Whether you are starting afresh or looking to advance your realm, we are here to support your journey in every step.</p>

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

        <h4 class="sidebar-title mt-5 mb-4">Hot Tags</h4>
        <div class="widget">
            <ul class="list-unstyled list-unstyled-border tagcloud text-left">
                <?php
                foreach ($tags as $tag) {
                    // Replace spaces with hyphens and convert to lowercase for the URL slug
                    $tag_slug = strtolower(str_replace(' ', '-', $tag));
                    // Generate the link
                    echo '<li><a href="https://stagingjobseurope.fungiwonders.com/jobs/' . $tag_slug . '" class="badge badge-pill badge-light">' . $tag . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<?php get_footer() ?>
