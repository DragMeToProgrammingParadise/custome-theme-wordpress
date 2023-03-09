
<?php get_header(inner); ?>

<h1> <?php the_title(); ?> </h1>
<?php the_post_thumbnail('medium'); ?>
<div class="content">
    <p>
        <?php echo get_the_content(); ?>
    </p>
</div>
<?php $img_path = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');  ?>
<img src="<?php echo $img_path[0] ?>" alt="" id="popimg">
    <video id="videoElement" width="400" height="250" controls="true" src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WeAreGoingOnBullrun.mp4"></video> 

    <button id="full_screen">[ ]</button>


    <script>
function enterFullScreen(element) {
  if(element.requestFullscreen) {
    element.requestFullscreen();
  }else if (element.mozRequestFullScreen) {
    element.mozRequestFullScreen();     // Firefox
  }else if (element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();  // Safari
  }else if(element.msRequestFullscreen) {
    element.msRequestFullscreen();      // IE/Edge
  }
};

let btn = document.getElementById("full_screen");
btn.addEventListener("click", function(){
  let img = document.querySelector("img");
  enterFullScreen(img);
});

document.addEventListener('fullscreenchange', (event) => {
  if (document.fullscreenElement) {
    console.log('Entered fullscreen:', document.fullscreenElement);
  } else {
    console.log('Exited fullscreen.');
  }
});

</script>



<?php get_footer(); ?>
