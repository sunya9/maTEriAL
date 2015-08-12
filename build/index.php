<?php get_header(); ?>
<div id="page__contents-wrapper">
  <main id="page__contents" role="main" itemprop="mainEntityOfPage">
    <div id="contents__inner">
      <?php query_posts('showposts=1'); ?>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article class="contents__article latest" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink(); ?>" itemprop="url">
          <header class="article__header">
            <h3 class="article__title" itemprop="name"><?php the_title(); ?></h3>
            <ul class="article__header__meta">
              <li class="article__time">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><span class="time__day"><?php echo get_post_time('d'); ?></span> <span class="time__month"><?php echo get_post_time('M'); ?></span> <span class="time__year"><?php echo get_post_time('Y'); ?></span></time>
              </li>
              <li class="article__category" itemprop="articleSection"><?php
              if(is_single()){
                the_category();
              }else{
                $name_map = array_map(function($category){
                  return $category->cat_name;
                }, get_the_category());
                $cat_str = implode(' ', $name_map);
                echo $cat_str;
              } ?></li>
            </ul>
          </header>
          <div class="article__body" itemprop="headline">
            <?php
              if ( has_post_thumbnail() ) { 
                the_post_thumbnail();
              }
            ?>
            <?php the_content('', false); ?>
          </div>
        </a>
      </article>
      <?php endwhile; endif; wp_reset_query(); ?>
      <hr />
      <section id="contents__recent-articles">
        <h3>Recent articles</h3>
        <ol itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
          <?php query_posts('offset=1'); ?>
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <li><a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url"><span itemprop="name"><?php the_title(); ?></span></a> <time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><?php echo get_post_time('d l Y'); ?></time></li>
          <?php endwhile; endif; ?>
        </ol>
        <a href="<?php echo home_url(); ?>/archives" id="contents__archives-link">Archives</a>
      </section>
    </div>
  </main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
