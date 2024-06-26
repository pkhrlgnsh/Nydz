<?php
/*
Template Name: HomePage
*/
get_header() ?>
<!-- Banner Section -->
<style>
    .banner_iomage_wraooper { 
        background-image: url('https://stagingjobseurope.fungiwonders.com/wp-content/uploads/2024/06/job-search-word-concepts-banner-vector-28884582.jpg'); 
        background: ; 
        height: 35rem;
        display: flex;
        justify-content: center;
    }
    .banner_content_text{
        display: flex;
        align-items: flex-end;
        justify-content: center;
    
    }
    .text_posts{
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 14px;
        color: black;
    }
    .text_posts:hover{
        color:black;
    }

    .button_hovs
    {
    padding: 8px 20px;
    padding-top: 8px;
    padding-right: 20px;
    padding-bottom: 8px;
    padding-left: 20px;
    margin: 5px;
    background-color: #33A2FF !important;
    color: white;
    font-size: 14px;
    cursor: pointer;
    }
    .button_hovs:hover
    {
    background-color: orange !important;
    color: white !important;
    }
    .button_hov
    {
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
    
    a.blog_titl_pd >p:hover{
        color: #33A2FF !important
               
    }
    .blog_titl_pdd{
        padding-top: 10px;
        padding-bottom: 10px;
        }
    .blog_titl_pdd:hover
    {    color: #33A2FF !important
    }
        .blog_titl_pds{
        padding: 8px;
        background-color: orange !important;
        color: white !important;
        font-size: 12px;
    }
  .button_hov:hover {
    background-color: orange !important;
    color: white !important;
  }
   .hov_col:hover{
    background-color: orange !important;
    color: white !important;
  }
    .cards_top{
        padding-top: 1px;
        padding-bottom: 10px;
    }
    .side_bar{
        padding-top: 5px;
        padding-bottom: 10px; 
    }
    .post_captions{
        font-size: 13px !important;
      background-color: #00000099;
}
    .banner_content_texts{
      display: flex;
      align-items: flex-end;
      font-size: 3.5rem;
      background-color: #00000099;
      color: #ffff;
      justify-content: center;
      padding: 45px;
      margin-bottom: 0px;
    }
    .banners_sections{
        padding-bottom: 30px;
        padding-top: 20px;
    }
    .features_posts{
        padding-bottom: 20px;
        align-items: center;
    }
    .banner_content_say{
       color:white;
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
       
    <h4>Featured <br>Posts</h4>
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
                    <p class="feature-post-caption post_captions"><?php the_title(); ?></p>
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
                <p class="my-3 text_posts"><?php echo get_the_excerpt(); ?></p>
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
                        <p class="badge badge-primary blog_titl_pds">Latest</p>
                    </div>
                </div>
                <div class="card-body px-0">
                <a href="<?php the_permalink(); ?>" class="card-title mb-2 blog_titl_pd"><p style="font-size: 20px; color: black"><?php the_title(); ?></p></a>
                    <p class="my-2 text_posts"><?php echo get_the_excerpt(); ?></p>
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
                <img src="https://stagingjobseurope.fungiwonders.com/wp-content/uploads/2024/06/job-search-word-concepts-banner-vector-28884582.jpg" alt="" class="circle-100 mb-3 ">
                <p style="font-size: 14px; text-align: center;">
    Welcome to Jobs in Europe, where your career dreams come to life. Discover a world of opportunities tailored to your skills and ambitions. Whether you are starting afresh or looking to advance your realm, we are here to support your journey in every step.
</p>
                                    
                                <h4 class="sidebar-title mt-5 mb-4">Subscribe Us To Get Newsletter</h4>
                <form action="">
                    <div class="subscribe-wrapper">
                        <input type="email" class="form-control" placeholder="Email Address">
                        <button type="submit" class="btn btn-primary"><i class="ti-location-arrow"></i></button>
                    </div>
                </form>
                
<h4 class="sidebar-title mt-5 mb-4">Tags</h4>
<div class="widget"></div>
                <?php
// Get the tags of the current post
$post_tags = get_tags();

// Limit the number of tags to 6
if ($post_tags) {
    $tag_count = 0; // Counter to track the number of tags displayed
    foreach ($post_tags as $tag) {
        if ($tag_count >= 6) {
            break; // Break the loop if 6 tags have been displayed
        }
        $tag_link = get_tag_link($tag->term_id);
?>
       

                <?php
// Array of tags
// $tags = array("Light Driver Jobs", "Heavy Driver Jobs", "Agriculture Jobs", "Waiter & Waitress Jobs", "Care Giver Jobs");
?>

<a href="<?php echo esc_url($tag_link); ?>" class="badge badge-pill badge-light  button_hovs"><?php echo esc_html($tag->name); ?></a>
<?php
        $tag_count++;
    }
}
?>
<?php
// Loop through the tags array and generate HTML for each tag
// foreach ($tags as $tag) {
//     $tag_slug = strtolower(str_replace(' ', '-', $tag));
//     // Generate the link
//     echo '<a href="https://jobsineurope.fungiwonders.com/posts/' . $tag_slug . '" class="badge badge-pill badge-light  button_hovs">' . $tag . '</a>';
// }

?>
                <div class="row ">
    <div class="col-md-4">
        <h5 class="sidebar-title mt-5 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="bi bi-facebook" viewBox="0 0 20 20">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg>    
        Facebook</h5>
    </div>
    <div class="col-md-4">
        <h5 class="sidebar-title mt-5 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#d62976" class="bi bi-instagram" viewBox="0 0 20 20">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg>  
        Instagram</h5>
    </div>
    <div class="col-md-4">
        <h5 class="sidebar-title mt-5 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#1DA1F2" class="bi bi-twitter-x" viewBox="0 0 20 20">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg></br>Twitter</h5>
    </div>
</div>
               
                               <h4 class="sidebar-title mt-5 mb-4 ">Popular Posts</h4>
                <div class="card mb-4">
                    <a href="single-post.html" class="overlay-link"></a>
                                        <div class="card-header p-0  ">                                   
                        
                    </div>
                       
                </div>

                        <?php
        // WP_Query arguments
        $args = array(
            'category_name' => 'popular',
            'posts_per_page' => 4 // Set to -1 to display all posts in the "featured" category
        );

        // The Query
        $popular_posts_query = new WP_Query($args);

        // The Loop
        if ($popular_posts_query->have_posts()) :
            while ($popular_posts_query->have_posts()) : $popular_posts_query->the_post();
        ?>
                <a href="<?php echo esc_url(get_permalink()); ?>" class="popular-post-item ">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" class="w-100" alt="">
                    <h5 class="popular-post-caption blog_titl_pdd" style="color: black; margin-bottom: 30px;">
    <?php the_title(); ?>
</h5>


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
                <!-- <div class="ad-card d-flex text-center align-items-center justify-content-center">
                    <span href="#" class="font-weight-bold">ADS</span>
                </div> -->
            </div>
        </div>
    </div>
    
    <section class="recent-blog-posts">
    <div class="ast-container">
        <h2 class="section-title text-center mb-4" style="color: black;">Recent Blog Posts</h2>
        <div class="row">
            <?php
            // WP_Query arguments to retrieve recent blog posts
            $blog_post_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3 // Display the latest 4 blog posts
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
                                <h4 class="blog-title blog_titl_pd"><a href="<?php the_permalink(); ?>" style="color: black;"><?php the_title(); ?></a></h4>
                                <p class="blog-excerpt text_posts" style="color: black;"><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more button_hov">Read More</a>
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
    <div class="container reason-box">
        <div class="section-box"> 
            <h2 class="section-title text-center mb-4" style="text-decoration: underline;">Why Choose Us?</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="reason-box">
                    <div class="title-box">
                        <h3 class="reason-title">Quality</h3>
                    </div>
                    <img src="https://stagingjobseurope.fungiwonders.com/wp-content/uploads/2024/06/Human-Resources-Rating-Man-Streamline-Freehand.png" alt="Quality Image"> 
                    <p class="reason-description">We offer a wide range of high-quality job opportunities in Europe.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="reason-box">
                    <div class="title-box">
                        <h3 class="reason-title">Expertise</h3>
                    </div>
                    <img src="https://stagingjobseurope.fungiwonders.com/wp-content/uploads/2024/06/Fitness-Dumbells-Time-Streamline-Freehand.png" alt="Expertise Image"> 
                    <p class="reason-description">Our team consists of experts in recruitment and job placement.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="reason-box">
                    <div class="title-box">
                        <h3 class="reason-title">Satisfaction</h3>
                    </div>
                    <img src="https://stagingjobseurope.fungiwonders.com/wp-content/uploads/2024/06/Crm-Worldwide-Faq-Streamline-Freehand.png" alt="Satisfaction Image">
                    <p class="reason-description">We prioritize customer satisfaction and strive to meet your needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer();
?>
