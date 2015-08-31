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
            <li class="share__twitter">
              <a href="http://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&amp;via=unsweets&amp;related=_X_y_z_" target="_new" id="twitter-share-link">Twitter</a>
              <script>
              (function(d, a){
                var me = d.getElementById(a), href = me.getAttribute('href');
                me.onclick = function(e){
                  e.preventDefault();
                  window.twttr=window.twttr||{};var D=550,A=450,C=screen.height,B=screen.width,H=Math.round((B/2)-(D/2)),G=0,F=document,E;if(C>A){G=Math.round((C/2)-(A/2))}window.twttr.shareWin=window.open(href,'','left='+H+',top='+G+',width='+D+',height='+A+',personalbar=0,toolbar=0,scrollbars=1,resizable=1');
                };
              }(document, 'twitter-share-link'));
              </script>
            </li>
            <li class="share__facebook">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" id="facebook-share-link">Facebook</a>
              <script>
              (function(d, a){
                var me = d.getElementById(a), href = me.getAttribute('href');
                me.onclick = function(e){
                  e.preventDefault();
                  window.twttr=window.twttr||{};var D=550,A=450,C=screen.height,B=screen.width,H=Math.round((B/2)-(D/2)),G=0,F=document,E;if(C>A){G=Math.round((C/2)-(A/2))}window.twttr.shareWin=window.open(href,'','left='+H+',top='+G+',width='+D+',height='+A+',personalbar=0,toolbar=0,scrollbars=1,resizable=1');
                };
              }(document, 'facebook-share-link'));
              </script>
            </li>
            <?php // <li class="share__hatena"><a href="#">Hatena bookmark</a></li> ?>
          </ul>
          <nav>
            <h2 class="nocontent">next/prev</h2>
            <ol class="article__footer__pager">
              <li class="next <?php if(!get_adjacent_post(false, '', false)) echo 'empty'; ?>">
                <?php next_post_link('%link'); ?>
              </li>
              <li class="prev <?php if(!get_adjacent_post(false, '', true)) echo 'empty'; ?>">
                <?php previous_post_link('%link'); ?>
              </li>
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