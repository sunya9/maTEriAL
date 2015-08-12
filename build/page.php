<?php get_header(); ?>
<div id="page__contents-wrapper">
  <main id="page__contents" itemprop="mainEntityOfPage">
    <div id="contents__inner">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <section class="single contents__article">
          <header class="article__header">
            <h1 class="article__title" itemprop="name"><?php the_title(); ?></h1>
          </header>
          <div class="article__body" itemprop="articleBody text">
            <?php the_content(); ?>
          </div>
      </section>
			<?php endwhile; endif; ?>
    </div>
  </main>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>