
<?php ?>

<article <?php post_class(); ?>>
  <h2 class="post-title">
    <?php if( is_single() ): ?>
      <?php the_title(); ?>
    <?php else: ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    <?php endif; ?>
  </h2> 

  <div class="post-meta">
   Posted on
    <span>
      <?php echo get_the_date('M j Y'); ?>
    </span>
  </div>

  <?php if( !is_single() ): ?>
    <div class="post-feature-image">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
    </div>
  <?php endif; ?>
  
  <div class="post-content">
    <?php 
      if( is_single() ): 
        the_content();
      else:
        the_excerpt();
      endif;
    ?>
  </div>

  <div class="post-footer">
    <div class="category-wrapper">
      <span>category:</span>

      <div class="categories">
        <?php the_category(" • "); ?>
      </div>
    </div>

    <div class="tags-wrapper">
      <span>tagged:</span>

      <div class="tags">
        <?php the_tags("", " • "); ?>
      </div>
    </div>
  </div>

</article>

