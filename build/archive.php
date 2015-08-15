<?php get_header(); ?>
<div id="page__contents-wrapper">
  <main id="page__contents" role="main" itemprop="mainEntityOfPage">
    <div id="contents__inner">
      <?php if (have_posts()) : ?>
      <section class="single contents__archive">
        <header class="article__header">
          <?php the_archive_title( '<h1 class="article__title" itemprop="name">', '</h1>' ); ?>
        </header>
        <div class="article__body">
          <?php the_archive_description( '<p class="archive-description">', '</p>' ); ?>
          <ol class="archive-list">
              <?php while (have_posts()) : the_post(); ?>
              <li>
                  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> <time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><?php echo get_post_time('d M Y'); ?></time>
              </li>
              <?php endwhile; ?>
          </ol>
        </div>
      </section>

      <?php bones_page_navi(); ?>

      <?php else : ?>
      <section class="single contents__search">
        <header class="article__header">
          <h1 class="article__title" itemprop="name"><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
        </header>
        <div class="article__body">
          <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
        </div>
      </section>
      
      <?php endif; ?>
    </div>
  </main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>