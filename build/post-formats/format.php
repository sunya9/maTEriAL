      <header class="article__header">
        <h1 class="article__title" itemprop="name"><?php the_title(); ?></h1>
        <ul class="article__header__meta">
          <li class="article__time">
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><span class="time__day"><?php echo get_post_time('d'); ?></span> <span class="time__month"><?php echo get_post_time('M'); ?></span> <span class="time__year"><?php echo get_post_time('Y'); ?></span></time>
          </li>
          <li class="article__category"><?php the_category(','); ?></li>
        </ul>
      </header>
      <div class="article__body" itemprop="articleBody text">
        <?php the_content(); ?>
      </div>