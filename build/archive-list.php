<?php 
/*
Template Name: archives
*/
?>
<?php get_header() ?>
<div id="page__contents-wrapper">
  <main id="page__contents" role="main" itemprop="mainEntityOfPage">
    <div id="contents__inner">
      <?php the_content() ?>
      <section class="single contents__article">
        <header class="article__header">
          <h3 class="article__title" itemprop="name"><?php the_title(); ?></h3>
        </header>
        <div class="article__body">
          <?php the_content() ?>
          <ul id="archive-list">
          <?php wp_get_archives("type=postbypost"); ?>
          </ul>
        </div>
      </section>
    </div>
  </main>
</div>
<?php get_sidebar(); ?>
 
<?php get_footer() ?>