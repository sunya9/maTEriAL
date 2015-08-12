<?php get_header(); ?>
<div id="page__contents-wrapper">
  <div id="page__contents" role="main">
    <div id="contents__inner">
      <main class="contents__article single" itemprop="mainEntityOfPage">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
          get_template_part( 'post-formats/format', get_post_format() );
        ?>
        <footer class="article__footer">
          <?php the_tags('<ul class="article__footer__tags"><li>','</li><li>','</li></ul>');?>
          <ul class="article__footer__share">
            <li class="share__twitter"><a href="#">Twitter</a></li>
            <li class="share__facebook"><a href="#">Facebook</a></li>
            <?php // <li class="share__hatena"><a href="#">Hatena bookmark</a></li> ?>
          </ul>
          <nav>
            <h2 class="nocontent">next/prev</h2>
            <ol class="article__footer__pager">
              <li class="next"><?php next_post('%', ''); ?></li>
              <li class="prev"><?php previous_post('%', ''); ?></li>
            </ol>
          </nav>
        </footer>
        <section id="article__comments">
          <?php comments_template(); ?>
          
        </section>
        <?php endwhile; endif; ?>      
      </main>
    </div>
  </div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>