<?php get_header(); ?>

<?php
while(have_posts()){
    the_post(); 
    
    pageBanner();
    ?>



  <div class="container container--narrow page-section">
  
  <div class="generic-content">
     <div class="row-group">
      <div class="one-third">  <?php the_post_thumbnail('professorLandscape'); ?></div>
       <div class="two-thirds">  <?php the_content(); ?></div>
  </div>
   </div>

    <?php
    $relatedPrograms = get_field('related_program');
    echo '<hr class="section-break">';
    echo '<h2 class="headline headline--medium">Subject(s) Taught</h2>';
    echo '<ul class="link-list min-list">';
    if (is_array($relatedPrograms) || is_object($relatedPrograms)){
    foreach($relatedPrograms as $program) { ?>
    <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program); ?></a></li>
    <?php }} 
    echo '</ul>';
   ?>
  </div>
</div>
<?php } ?>
  <?php get_footer(); ?>