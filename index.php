<?php
get_header('inner');
?>
<section class="news pt-0">
  <div class="container mt-md-5">
    <h2 class="mx-4 my-0 text-center">Recent News</h2>

    <ul class="row d-lg-flex list-unstyled image-block justify-content-center px-lg-0 mx-lg-0">
    <?php 
    while(have_posts()){
      the_post();
    ?>
    <li class="col-lg-4 col-md-5 image-block full-width p-3">
        <div class="image-block-inner">
          <a class="mh-100" href="#">
          <?php $img_path = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');  ?>
            <img src=" <?php echo $img_path[0]; ?>" class="img-responsive w-100"></a>
          <span class="hp-posts-cat"><?php the_date(); ?></span>
          <span class="hp-posts-cat"><?php the_excerpt(); ?></span>
          <h4 class="mt-3"><a href="#"><?php the_title(); ?></a></h4>
           <p> </p>
          <a href="#" class="read-more">Read more ></a>
        </div><!-- .image-block-inner -->
    </li>
    <?php
    }
    ?>
    </ul>
  </div>
</section>
<?php
get_footer();
?>
