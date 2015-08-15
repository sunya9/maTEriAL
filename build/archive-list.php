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
      <section class="single contents__archive">
        <header class="article__header">
          <h3 class="article__title" itemprop="name"><?php the_title(); ?></h3>
        </header>
        <div class="article__body">
          <?php the_content() ?>
          <?php $year; ?>
          <?php query_posts('posts_per_page=-1'); ?>
          <?php if (have_posts()): while(have_posts()): the_post(); ?>
          <?php if ($year != get_post_time('Y')): ?>
            <?php if ($year): ?>
          </ol>
            <?php endif; ?>
            <h4><?php echo get_post_time('Y'); ?>年</h4>
            <ol class="archive-list">
            <?php $year = get_post_time('Y'); ?>
          <?php endif; ?>
            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> <time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><?php echo get_post_time('d M Y'); ?></time></li>
          <?php endwhile; ?>
          </ol>
          <?php endif; ?>
        </div>
      </section>
    </div>
  </main>
</div>
<?php get_sidebar(); ?>
 
<?php get_footer() ?>